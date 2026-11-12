<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CandidateReason;
use App\Models\CandidateStage;
use App\Models\CareerApplication;
use App\Support\Recruitment;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

/** CRUD for the two masters: candidate stages and shortlist/reject reasons. */
class RecruitmentMasterController extends Controller
{
    private function model(string $type): string
    {
        return match ($type) {
            'stages' => CandidateStage::class,
            'reasons' => CandidateReason::class,
            default => abort(404),
        };
    }

    private function rules(string $type): array
    {
        $rules = [
            'title' => 'required|string|max:100',
            'remarks' => 'nullable|string|max:500',
            'sort_order' => 'nullable|integer|min:0|max:999',
        ];

        if ($type === 'stages') {
            $rules['bucket'] = ['required', Rule::in(array_keys(Recruitment::BUCKETS))];
        }

        return $rules;
    }

    public function index(string $type)
    {
        $model = $this->model($type);

        return view('admin.recruitment.masters', [
            'type' => $type,
            'items' => $model::orderBy('sort_order')->orderBy('id')->get(),
            'buckets' => Recruitment::BUCKETS,
        ]);
    }

    public function store(Request $request, string $type)
    {
        $model = $this->model($type);
        $data = $request->validate($this->rules($type));
        $data['sort_order'] = $data['sort_order'] ?? (($model::max('sort_order') ?? 0) + 1);
        $data['is_active'] = true;

        $model::create($data);

        return back()->with('success', 'Added.');
    }

    public function update(Request $request, string $type, int $id)
    {
        $model = $this->model($type);
        $data = $request->validate($this->rules($type));
        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['is_active'] = $request->boolean('is_active');

        $model::findOrFail($id)->update($data);

        return back()->with('success', 'Saved.');
    }

    public function destroy(string $type, int $id)
    {
        $model = $this->model($type);
        $column = $type === 'stages' ? 'stage_id' : 'reason_id';

        if (CareerApplication::where($column, $id)->exists()) {
            return back()->withErrors(['delete' => 'This is used by existing candidates. Mark it inactive instead of deleting.']);
        }

        $model::findOrFail($id)->delete();

        return back()->with('success', 'Deleted.');
    }
}
