<?php

namespace App\Support;

/** Same dropdown values as the old CodeIgniter Lead CRM. */
class LeadOptions
{
    public const STATUSES = [
        'New Lead', 'Under Follow-up', 'Quotation Sent', 'Under Negotiation',
        'Successfully Closed', 'Not Converted', 'Invalid Lead',
    ];

    public const STATUS_CLASS = [
        'New Lead' => 'default', 'Under Follow-up' => 'warning', 'Quotation Sent' => 'info',
        'Under Negotiation' => 'primary', 'Successfully Closed' => 'success',
        'Not Converted' => 'danger', 'Invalid Lead' => 'danger',
    ];

    public const LEAD_TYPES = ['Hot', 'Warm', 'Cold', 'Invalid'];

    public const TYPE_CLASS = ['Hot' => 'danger', 'Warm' => 'warning', 'Cold' => 'info', 'Invalid' => 'default'];

    public const SERVICE_TYPES = [
        'Business Website', 'Custom Development', 'E-Commerce Website', 'Multivendor E-Commerce',
        'Classified Portal', 'E-Learning & LMS', 'Mobile Application', 'SEO Services',
        'Social Media Marketing', 'Meta Ads', 'Google Adwords', 'Digital Marketing',
    ];

    public const ENTITY_TYPES = [
        'Proprietorship Firm', 'Partnership Firm', 'Limited Liability Partnership (LLP)',
        'Private Limited Company', 'Public Limited Company', 'One Person Company (OPC)',
        'Society / NGO', 'Trust', 'Government / Public Sector', 'Other',
    ];

    public const INDUSTRIES = [
        'Clothing & Fashion', 'Groceries & Food', 'Electronics & Hardware', 'Jewellery & Luxury',
        'Manufacturing / Wholesale', 'Beauty, Cosmetics & Personal Care', 'Footwear & Leather Goods',
        'Handicraft', 'Rugs & Carpets', 'Footwear, Bags & Accessories', 'Home Decor & Furniture',
        'Other Business',
    ];

    public const SOURCES = ['Manual', 'Contact Enquiry', 'Knowledge Base Enquiry', 'Package Enquiry'];

    /** Manual leads: how the lead came in. */
    public const SUB_SOURCES = ['whatsapp' => 'WhatsApp', 'call' => 'Call', 'email' => 'Email'];

    /** form_type => [label, badge class] */
    public const FORM_TYPES = [
        'whatsapp' => ['WhatsApp', 'success'],
        'call' => ['Call', 'primary'],
        'email' => ['Email', 'info'],
        'contact_form' => ['Contact Form', 'info'],
        'consultation' => ['Consultation Form', 'primary'],
        'package' => ['Package Form', 'primary'],
    ];
}
