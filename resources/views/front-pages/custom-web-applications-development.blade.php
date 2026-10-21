@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/custom-development/custom.css" />
@endpush

@section('content')
  <main>
    <!-- ============================================================
           01 — BANNER
      ============================================================= -->
      
    @include('partials.hero', [
      'video' => 'assets/video/effect4.mp4',
      'poster' => 'assets/video/poster/effect4.png',
      'default' => [
        'eyebrow' => 'CUSTOM WEB APPLICATION DEVELOPMENT',
        'heading' => 'Your Business Works Differently. Your Software Should Too.',
        'description' => "Tell us your workflow, challenge or idea—we'll build a custom web application around the way your business actually works.",
        'primary_text' => 'Discuss Your Requirement',
        'primary_url' => '#enquire',
        'secondary_text' => 'Chat on WhatsApp',
        'secondary_url' => 'javascript:void(0)',
      ],
    ])

    <!-- ============================================================
           WHY CUSTOM DEVELOPMENT?
      ============================================================= -->
    <section class="secA classifiedOverview">
      <div class="container">
        <div class="wrapper">
          <div class="heading">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              BEYOND STANDARD SOFTWARE
            </span>

            <h3>
              Built For Your <br />
              <span>Business Needs.</span>
            </h3>

            <p>
              Every business has its own processes, teams, and challenges. We
              build applications around the way your business actually
              works—not the other way around.
            </p>
          </div>

          <div class="secA-cols">
            <div class="secA-col">
              <span class="secA-num">01</span>
              <span class="secA-tag">BUILT FOR YOUR BUSINESS</span>
            </div>

            <div class="secA-col secA-col--lg">
              <p>
                Your application should follow the way your business works—not
                force your business to follow the software.
              </p>
            </div>

            <div class="secA-col">
              <p>
                We understand your processes, users and day-to-day challenges
                first, then design the workflows and functionality around what
                your business actually needs.
              </p>
            </div>
          </div>

          <div class="secA-cards">
            <!-- 01 -->
            <div class="secA-card">
              <div class="secA-card-top">
                <span class="secA-card-num">01</span>

                <div class="secA-card-icon">
                  <svg viewBox="0 0 24 24" fill="none">
                    <rect x="3" y="4" width="18" height="16" rx="2" stroke="currentColor" stroke-width="1.6" />
                    <path d="M3 9H21" stroke="currentColor" stroke-width="1.6" />
                    <path d="M7 13H12M7 16H15" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                  </svg>
                </div>
              </div>

              <h4>Your Process Is Different</h4>

              <p>
                Your workflows don't fit properly into standard software or
                off-the-shelf tools.
              </p>
            </div>

            <!-- 02 -->
            <div class="secA-card">
              <div class="secA-card-top">
                <span class="secA-card-num">02</span>

                <div class="secA-card-icon">
                  <svg viewBox="0 0 24 24" fill="none">
                    <circle cx="9" cy="8" r="4" stroke="currentColor" stroke-width="1.6" />
                    <path d="M2 20C2 16.7 4.7 14 8 14H10C13.3 14 16 16.7 16 20" stroke="currentColor" stroke-width="1.6"
                      stroke-linecap="round" />
                    <path d="M16 11H22M19 8V14" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                  </svg>
                </div>
              </div>

              <h4>Too Much Manual Work</h4>

              <p>
                Spreadsheets, repeated data entry and disconnected tools are
                slowing down everyday operations.
              </p>
            </div>

            <!-- 03 -->
            <div class="secA-card">
              <div class="secA-card-top">
                <span class="secA-card-num">03</span>

                <div class="secA-card-icon">
                  <svg viewBox="0 0 24 24" fill="none">
                    <path d="M4 5H20V19H4V5Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                    <path d="M8 9H16M8 13H14M8 17H11" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                    <path d="M17 14L20 17L22 14" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </div>
              </div>

              <h4>Your Business Needs to Scale</h4>

              <p>
                You need a system that can evolve with new users, workflows,
                locations, integrations, and future requirements.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
           04 — TYPES OF WEB APPLICATIONS WE DEVELOP
      ============================================================= -->
    <section class="webAppTypes">
      <div class="container">
        <div class="webAppTypes-grid">
          <div class="webAppTypes-intro">
            <div class="heading">
              <span class="eyebrow">
                <span class="eyebrow-line"></span>
                WHAT CAN WE BUILD FOR YOU?
              </span>

              <h3>
                Applications Built Around
                <span>Your Business Needs.</span>
              </h3>

              <p>
                From business systems to customer-facing platforms, we build
                custom web applications around your workflows and
                requirements.
              </p>
            </div>

            <a href="javascript:void(0)" class="btn btn-outline-black" data-model=".enquire-pop">
              Discuss Your Application <i>↗</i>
            </a>
          </div>

          <ul class="webAppTypes-list">
            <!-- CRM -->
            <li>
              <span class="webAppTypes-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M4 20c0-3.3 3.6-5 8-5s8 1.7 8 5" stroke="currentColor" stroke-width="1.7"
                    stroke-linecap="round" />
                  <circle cx="12" cy="8" r="3.5" stroke="currentColor" stroke-width="1.7" />
                </svg>
              </span>

              <div>
                <h4>CRM</h4>
                <p>Manage leads, customers and follow-ups in one place.</p>
              </div>
            </li>

            <!-- ERP -->
            <li>
              <span class="webAppTypes-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <rect x="3" y="3" width="8" height="8" rx="1.5" stroke="currentColor" stroke-width="1.7" />
                  <rect x="13" y="3" width="8" height="8" rx="1.5" stroke="currentColor" stroke-width="1.7" />
                  <rect x="3" y="13" width="8" height="8" rx="1.5" stroke="currentColor" stroke-width="1.7" />
                  <rect x="13" y="13" width="8" height="8" rx="1.5" stroke="currentColor" stroke-width="1.7" />
                </svg>
              </span>

              <div>
                <h4>ERP</h4>
                <p>Connect operations, teams, inventory and business data.</p>
              </div>
            </li>

            <!-- MANAGEMENT SYSTEM -->
            <li>
              <span class="webAppTypes-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M4 6h16M4 12h16M4 18h10" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                </svg>
              </span>

              <div>
                <h4>Management System</h4>
                <p>Manage records, teams, tasks and daily operations.</p>
              </div>
            </li>

            <!-- BOOKING SYSTEM -->
            <li>
              <span class="webAppTypes-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <rect x="3" y="4" width="18" height="17" rx="2" stroke="currentColor" stroke-width="1.7" />
                  <path d="M3 9h18M8 3v3M16 3v3" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                </svg>
              </span>

              <div>
                <h4>Booking System</h4>
                <p>
                  Manage appointments, schedules, availability and bookings.
                </p>
              </div>
            </li>

            <!-- CUSTOMER / VENDOR PORTAL -->
            <li>
              <span class="webAppTypes-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <circle cx="9" cy="8" r="3.2" stroke="currentColor" stroke-width="1.7" />
                  <path d="M3.5 19c0-3 2.5-4.8 5.5-4.8s5.5 1.8 5.5 4.8" stroke="currentColor" stroke-width="1.7"
                    stroke-linecap="round" />
                  <path d="M16 9h5M18.5 6.5v5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                </svg>
              </span>

              <div>
                <h4>Customer / Vendor Portal</h4>
                <p>Give customers and vendors their own secure workspace.</p>
              </div>
            </li>

            <!-- WORKFLOW AUTOMATION -->
            <li>
              <span class="webAppTypes-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M5 4H19V20H5V4Z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round" />
                  <path d="M8 8H16M8 12H16M8 16H13" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                </svg>
              </span>

              <div>
                <h4>Workflow Automation</h4>
                <p>Automate approvals, tasks, notifications and processes.</p>
              </div>
            </li>

            <!-- SAAS PLATFORM -->
            <li>
              <span class="webAppTypes-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M12 3v18M4 8l8-5 8 5M4 8v9l8 5M20 8v9l-8 5" stroke="currentColor" stroke-width="1.7"
                    stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>

              <div>
                <h4>SaaS Platform</h4>
                <p>Build subscription-based software for your customers.</p>
              </div>
            </li>

            <!-- COMPLETELY CUSTOM -->
            <li>
              <span class="webAppTypes-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <rect x="3" y="3" width="18" height="18" rx="3" stroke="currentColor" stroke-width="1.7" />
                  <path d="M7 12h10M12 7v10" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                </svg>
              </span>

              <div>
                <h4>Something Completely Custom</h4>
                <p>
                  Build a unique application around your exact business idea.
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- ============================================================
           05 — BUILT AROUND YOUR BUSINESS WORKFLOW
      ============================================================= -->
    <section class="webAppWorkflow">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            HOW WE BUILD IT
          </span>

          <h3>
            Your Workflow Comes First.

            <span>The Application Follows.</span>
          </h3>

          <p>
            We first understand how your business works, then turn that
            process into a custom application built around the way your team
            actually operates.
          </p>
        </div>

        <div class="webAppWorkflow-process">
          <!-- STEP 01 -->
          <div class="webAppWorkflow-item">
            <div class="webAppWorkflow-top">
              <span class="webAppWorkflow-number">01</span>

              <span class="webAppWorkflow-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <circle cx="12" cy="12" r="8.5" stroke="currentColor" stroke-width="1.7" />
                  <path d="M12 7.5v4.8l3.2 2" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                </svg>
              </span>
            </div>

            <div class="webAppWorkflow-copy">
              <span class="webAppWorkflow-label"> START WITH THE WHY </span>

              <h4>Requirement</h4>

              <p>
                We identify your goals, users, challenges and the outcomes
                your application needs to deliver.
              </p>
            </div>
          </div>

          <!-- CONNECTOR -->
          <div class="webAppWorkflow-connector">
            <span></span>

            <svg viewBox="0 0 24 24" fill="none">
              <path d="M4 12h16M14 6l6 6-6 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </div>

          <!-- STEP 02 -->
          <div class="webAppWorkflow-item">
            <div class="webAppWorkflow-top">
              <span class="webAppWorkflow-number">02</span>

              <span class="webAppWorkflow-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <rect x="4" y="4" width="16" height="16" rx="2" stroke="currentColor" stroke-width="1.7" />
                  <path d="M8 9h8M8 13h8M8 17h5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                </svg>
              </span>
            </div>

            <div class="webAppWorkflow-copy">
              <span class="webAppWorkflow-label">
                UNDERSTAND THE CURRENT STATE
              </span>

              <h4>Existing Process</h4>

              <p>
                We examine your current tools, manual tasks, handoffs and
                bottlenecks to find where improvements can be made.
              </p>
            </div>
          </div>

          <!-- CONNECTOR -->
          <div class="webAppWorkflow-connector">
            <span></span>

            <svg viewBox="0 0 24 24" fill="none">
              <path d="M4 12h16M14 6l6 6-6 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </div>

          <!-- STEP 03 -->
          <div class="webAppWorkflow-item">
            <div class="webAppWorkflow-top">
              <span class="webAppWorkflow-number">03</span>

              <span class="webAppWorkflow-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <circle cx="6" cy="6" r="2.2" stroke="currentColor" stroke-width="1.7" />
                  <circle cx="6" cy="18" r="2.2" stroke="currentColor" stroke-width="1.7" />
                  <circle cx="18" cy="12" r="2.2" stroke="currentColor" stroke-width="1.7" />
                  <path d="M8 7l8 4M8 17l8-4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                </svg>
              </span>
            </div>

            <div class="webAppWorkflow-copy">
              <span class="webAppWorkflow-label">
                TURN PROCESS INTO LOGIC
              </span>

              <h4>Workflow Mapping</h4>

              <p>
                We map users, roles, permissions, actions, approvals and
                business rules into a clear application structure.
              </p>
            </div>
          </div>

          <!-- CONNECTOR -->
          <div class="webAppWorkflow-connector">
            <span></span>

            <svg viewBox="0 0 24 24" fill="none">
              <path d="M4 12h16M14 6l6 6-6 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </div>

          <!-- STEP 04 -->
          <div class="webAppWorkflow-item webAppWorkflow-item--final">
            <div class="webAppWorkflow-top">
              <span class="webAppWorkflow-number">04</span>

              <span class="webAppWorkflow-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M13 2.8L4 14h6.8L10 21.2 20 9h-7.2L13 2.8z" stroke="currentColor" stroke-width="1.7"
                    stroke-linejoin="round" />
                </svg>
              </span>
            </div>

            <div class="webAppWorkflow-copy">
              <span class="webAppWorkflow-label"> BUILT AROUND YOU </span>

              <h4>Custom Application</h4>

              <p>
                Your software is designed around your workflow, giving your
                team the tools and flexibility they actually need.
              </p>
            </div>
          </div>
        </div>

        <div class="webAppWorkflow-bottom">
          <div class="webAppWorkflow-statement">
            <span>THE RESULT</span>

            <p>
              Software that adapts to your business — not a business that has
              to adapt to its software.
            </p>
          </div>

          <a href="javascript:void(0)" class="btn btn-outline-black" data-model="enquire">
            Discuss Your Application
            <i>↗</i>
          </a>
        </div>
      </div>
    </section>

    <!-- ============================================================
           07 — CONNECTED BUSINESS SYSTEM
      ============================================================= -->
    <section class="webAppIntegrations">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            CONNECTED BUSINESS SYSTEM
          </span>

          <h3>
            One System. Multiple <br />
            <span>Business Functions.</span>
          </h3>

          <p>
            Instead of managing different tools separately, connect your
            operations, customers, and workflows through one custom
            application built around your business.
          </p>
        </div>

        <div class="webAppIntegrations-wrap">
          <!-- LEFT -->
          <div class="webAppIntegrations-side webAppIntegrations-side--left">
            <div class="webAppIntegrations-side-head">
              <span class="webAppIntegrations-side-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M8 3L3 8l5 5M16 3l5 5-5 5M14 4l-4 16" stroke="currentColor" stroke-width="1.7"
                    stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>

              <div>
                <small>BUSINESS OPERATIONS</small>
                <h4>Business Operations</h4>
              </div>
            </div>

            <div class="webAppIntegrations-list">
              <div class="webAppIntegrations-card">
                <span class="webAppIntegrations-card-icon">
                  <svg viewBox="0 0 24 24" fill="none">
                    <circle cx="9" cy="8" r="3" stroke="currentColor" stroke-width="1.7" />
                    <path d="M3.5 19c0-3 2.5-4.8 5.5-4.8s5.5 1.8 5.5 4.8" stroke="currentColor" stroke-width="1.7"
                      stroke-linecap="round" />
                  </svg>
                </span>
                <span>Activity Tracking</span>
              </div>

              <div class="webAppIntegrations-card">
                <span class="webAppIntegrations-card-icon">
                  <svg viewBox="0 0 24 24" fill="none">
                    <rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="1.7" />
                    <path d="M7 15l3-3 2 2 5-5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </span>
                <span>Notifications</span>
              </div>

              <div class="webAppIntegrations-card">
                <span class="webAppIntegrations-card-icon">
                  <svg viewBox="0 0 24 24" fill="none">
                    <circle cx="6" cy="6" r="2" stroke="currentColor" stroke-width="1.7" />
                    <circle cx="18" cy="12" r="2" stroke="currentColor" stroke-width="1.7" />
                    <circle cx="6" cy="18" r="2" stroke="currentColor" stroke-width="1.7" />
                    <path d="M8 7l8 4M8 17l8-4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                  </svg>
                </span>
                <span>Documents &amp; Records</span>
              </div>

              <div class="webAppIntegrations-card">
                <span class="webAppIntegrations-card-icon">
                  <svg viewBox="0 0 24 24" fill="none">
                    <path d="M4 20V10M10 20V4M16 20v-7M22 20H2" stroke="currentColor" stroke-width="1.7"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
                <span>Reports &amp; Dashboards</span>
              </div>

              <div class="webAppIntegrations-card">
                <span class="webAppIntegrations-card-icon">
                  <svg viewBox="0 0 24 24" fill="none">
                    <path d="M6 8a6 6 0 0112 0c0 4 1.5 5.5 1.5 6.5H4.5C4.5 13.5 6 12 6 8z" stroke="currentColor"
                      stroke-width="1.7" stroke-linejoin="round" />
                    <path d="M9.5 18a2.5 2.5 0 005 0" stroke="currentColor" stroke-width="1.7" />
                  </svg>
                </span>
                <span>Daily Workflows</span>
              </div>

              <div class="webAppIntegrations-card">
                <span class="webAppIntegrations-card-icon">
                  <svg viewBox="0 0 24 24" fill="none">
                    <path d="M5 4h14v16H5V4z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round" />
                    <path d="M8 8h8M8 12h8M8 16h5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                  </svg>
                </span>
                <span>Team &amp; Role Management</span>
              </div>
            </div>
          </div>

          <!-- CENTER -->
          <div class="webAppIntegrations-center">
            <div class="webAppIntegrations-center-orbit"></div>

            <div class="webAppIntegrations-center-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M13 2L3 14h7l-1 8 11-13h-7l1-7z" stroke="currentColor" stroke-width="1.7"
                  stroke-linejoin="round" />
              </svg>
            </div>

            <small>ONE CUSTOM APPLICATION</small>

            <h4>
              One Custom
              <span>Application</span>
            </h4>

            <p>
              One platform where your teams, data and business processes work
              together—without switching between multiple disconnected tools.
            </p>

            <div class="webAppIntegrations-center-status">
              <span></span>
              One Login • One Dashboard • One System
            </div>
          </div>

          <!-- RIGHT -->
          <div class="webAppIntegrations-side webAppIntegrations-side--right">
            <div class="webAppIntegrations-side-head">
              <span class="webAppIntegrations-side-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.7" />
                  <path d="M3 12h18M12 3a14 14 0 010 18M12 3a14 14 0 000 18" stroke="currentColor" stroke-width="1.7" />
                </svg>
              </span>

              <div>
                <small>CONNECTED INTEGRATIONS</small>
                <h4>Connected Integrations</h4>
              </div>
            </div>

            <div class="webAppIntegrations-list">
              <div class="webAppIntegrations-card">
                <span class="webAppIntegrations-card-icon">
                  <svg viewBox="0 0 24 24" fill="none">
                    <rect x="2" y="5" width="20" height="14" rx="2" stroke="currentColor" stroke-width="1.7" />
                    <path d="M2 10h20" stroke="currentColor" stroke-width="1.7" />
                  </svg>
                </span>
                <span>Cloud Services</span>
              </div>

              <div class="webAppIntegrations-card">
                <span class="webAppIntegrations-card-icon">
                  <svg viewBox="0 0 24 24" fill="none">
                    <path d="M8 3L3 8l5 5M16 3l5 5-5 5M14 4l-4 16" stroke="currentColor" stroke-width="1.7"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
                <span>Third-Party APIs</span>
              </div>

              <div class="webAppIntegrations-card">
                <span class="webAppIntegrations-card-icon">
                  <svg viewBox="0 0 24 24" fill="none">
                    <path d="M6 8a6 6 0 0112 0c0 4 1.5 5.5 1.5 6.5H4.5C4.5 13.5 6 12 6 8z" stroke="currentColor"
                      stroke-width="1.7" stroke-linejoin="round" />
                    <path d="M9.5 18a2.5 2.5 0 005 0" stroke="currentColor" stroke-width="1.7" />
                  </svg>
                </span>
                <span>Email Notifications</span>
              </div>

              <div class="webAppIntegrations-card">
                <span class="webAppIntegrations-card-icon">
                  <svg viewBox="0 0 24 24" fill="none">
                    <circle cx="9" cy="8" r="3.2" stroke="currentColor" stroke-width="1.7" />
                    <path d="M3.5 19c0-2.8 2.5-4.8 5.5-4.8s5.5 2 5.5 4.8" stroke="currentColor" stroke-width="1.7"
                      stroke-linecap="round" />
                    <path d="M16 8.5a3 3 0 100-6M18.5 19c0-2.3-1.5-4-3.7-4.6" stroke="currentColor" stroke-width="1.7"
                      stroke-linecap="round" />
                  </svg>
                </span>
                <span>CRM &amp; ERP Integration</span>
              </div>

              <div class="webAppIntegrations-card">
                <span class="webAppIntegrations-card-icon">
                  <svg viewBox="0 0 24 24" fill="none">
                    <path d="M5 5h14v14H5V5z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round" />
                    <path d="M8 9h8M8 13h5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                  </svg>
                </span>
                <span>WhatsApp &amp; SMS</span>
              </div>

              <div class="webAppIntegrations-card">
                <span class="webAppIntegrations-card-icon">
                  <svg viewBox="0 0 24 24" fill="none">
                    <rect x="2" y="5" width="20" height="14" rx="2" stroke="currentColor" stroke-width="1.7" />
                    <path d="M2 10h20" stroke="currentColor" stroke-width="1.7" />
                  </svg>
                </span>
                <span>Payment Gateways</span>
              </div>
            </div>
          </div>
        </div>

        <!-- INTEGRATION STRIP -->
        <div class="webAppIntegrations-automation">
          <div class="webAppIntegrations-automation-icon">
            <svg viewBox="0 0 24 24" fill="none">
              <path
                d="M12 3v4M12 17v4M3 12h4M17 12h4M5.6 5.6l2.8 2.8M15.6 15.6l2.8 2.8M18.4 5.6l-2.8 2.8M8.4 15.6l-2.8 2.8"
                stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
              <circle cx="12" cy="12" r="3.5" stroke="currentColor" stroke-width="1.7" />
            </svg>
          </div>

          <div class="webAppIntegrations-automation-content">
            <small>BUILT TO CONNECT</small>
            <p>
              Connect your business tools, services and systems so information
              moves smoothly across your custom application.
            </p>
          </div>

          <button type="button" data-model=".enquire-pop" class="btn btn-outline-black">
            Build Your Application <i>↗</i>
          </button>
        </div>
      </div>
    </section>

    <section class="secL">
      <div class="container">
        <div class="heading">
          <span class="eyebrow"><span class="eyebrow-line"></span>WHY WEB MINGO</span>
          <h3>
            Because Custom Software
            <span>Should Solve Business Problems.</span>
          </h3>
          <p>
            We focus on understanding the business process first, then design
            and develop the technology around it.
          </p>
        </div>

        <ul class="secL-list">
          <li>
            <span class="secL-icon"><svg viewBox="0 0 24 24">
                <path d="M12 3v18" />
                <path d="M3 12h18" />
                <path d="M5 5l14 14" />
                <path d="M19 5L5 19" />
              </svg></span>
            <div>
              <h4>Business-First Thinking</h4>
              <p>
                We understand the process before deciding how the software
                should work.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon"><svg viewBox="0 0 24 24">
                <path d="M13 2L3 14h7l-1 8 11-13h-7l1-7z" />
              </svg></span>
            <div>
              <h4>Custom-Built Functionality</h4>
              <p>
                Your application is developed around your requirements instead
                of forcing your workflow into a fixed product.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon"><svg viewBox="0 0 24 24">
                <circle cx="11" cy="11" r="7" />
                <path d="M21 21l-4.3-4.3" />
              </svg></span>
            <div>
              <h4>Scalable Development</h4>
              <p>
                The application can be planned around future users, modules,
                integrations and business growth.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon"><svg viewBox="0 0 24 24">
                <path d="M4 12a8 8 0 1116 0 8 8 0 01-16 0z" />
                <path d="M12 8v4l3 2" />
              </svg></span>
            <div>
              <h4>Long-Term Partnership</h4>
              <p>
                We can continue supporting, improving and extending the
                application as your requirements evolve.
              </p>
            </div>
          </li>
        </ul>

        <div class="cntr">
          <button type="button" data-model=".enquire-pop" class="btn btn-outline-black">
            Start Your Project <i>↗</i>
          </button>
        </div>
      </div>
    </section>

    <section class="secG">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            HOW WE BUILD
          </span>

          <h3>
            Our Custom Development
            <span>Process.</span>
          </h3>

          <p>
            A clear process from understanding your business to building,
            launching and supporting your custom application.
          </p>
        </div>

        <div class="secG-process">
          <div class="secG-line">
            <span></span>
          </div>

          <article class="secG-step">
            <div class="secG-marker">
              <div class="secG-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <circle cx="11" cy="11" r="6.5"></circle>
                  <path d="m16 16 4 4"></path>
                  <path d="M8.5 11h5"></path>
                  <path d="M11 8.5v5"></path>
                </svg>
              </div>
            </div>

            <div class="secG-info">
              <span class="secG-kicker">UNDERSTAND</span>
              <h4>Understand The Problem First</h4>
              <p>
                We start by learning your business, the problem you want to
                solve and the requirements the application must meet.
              </p>

              <div class="secG-details">
                <span>Business</span>
                <span>Problem</span>
                <span>Requirements</span>
              </div>
            </div>

            <div class="secG-side">
              <span>01</span>
              <strong>Foundation</strong>
            </div>
          </article>

          <article class="secG-step">
            <div class="secG-marker">
              <div class="secG-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                  <path d="M8 9h8"></path>
                  <path d="M8 13h5"></path>
                  <path d="M8 17h7"></path>
                </svg>
              </div>
            </div>

            <div class="secG-info">
              <span class="secG-kicker">PLAN</span>
              <h4>Map Workflow And Features</h4>
              <p>
                We define the workflow, features and application structure so
                the build follows a clear and realistic roadmap.
              </p>

              <div class="secG-details">
                <span>Workflow</span>
                <span>Features</span>
                <span>Structure</span>
              </div>
            </div>

            <div class="secG-side">
              <span>02</span>
              <strong>Direction</strong>
            </div>
          </article>

          <article class="secG-step">
            <div class="secG-marker">
              <div class="secG-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M5 19 19 5"></path>
                  <path d="m7 5 12 12"></path>
                  <path d="M5 12h4"></path>
                  <path d="M15 12h4"></path>
                </svg>
              </div>
            </div>

            <div class="secG-info">
              <span class="secG-kicker">DESIGN</span>
              <h4>Design Around Your Users</h4>
              <p>
                We shape the UI/UX and user journey around your application so
                it feels simple and natural to use.
              </p>

              <div class="secG-details">
                <span>UI/UX</span>
                <span>User Journey</span>
                <span>Usability</span>
              </div>
            </div>

            <div class="secG-side">
              <span>03</span>
              <strong>Experience</strong>
            </div>
          </article>

          <article class="secG-step">
            <div class="secG-marker">
              <div class="secG-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="m8 9-4 3 4 3"></path>
                  <path d="m16 9 4 3-4 3"></path>
                  <path d="m14 5-4 14"></path>
                </svg>
              </div>
            </div>

            <div class="secG-info">
              <span class="secG-kicker">DEVELOP</span>
              <h4>Build The Custom Application</h4>
              <p>
                We develop the application with the features and integrations
                your business needs, built to work the way you do.
              </p>

              <div class="secG-details">
                <span>Development</span>
                <span>Features</span>
                <span>Integrations</span>
              </div>
            </div>

            <div class="secG-side">
              <span>04</span>
              <strong>Build</strong>
            </div>
          </article>

          <article class="secG-step">
            <div class="secG-marker">
              <div class="secG-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                  <path d="m8 12 2.5 2.5L16 9"></path>
                </svg>
              </div>
            </div>

            <div class="secG-info">
              <span class="secG-kicker">TEST</span>
              <h4>Test Before It Goes Live</h4>
              <p>
                We check functionality, security and performance so the
                application is stable and reliable before launch.
              </p>

              <div class="secG-details">
                <span>Functionality</span>
                <span>Security</span>
                <span>Performance</span>
              </div>
            </div>

            <div class="secG-side">
              <span>05</span>
              <strong>Quality</strong>
            </div>
          </article>

          <article class="secG-step secG-step-last">
            <div class="secG-marker">
              <div class="secG-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M12 19V5"></path>
                  <path d="m7 10 5-5 5 5"></path>
                  <path d="M5 19h14"></path>
                </svg>
              </div>
            </div>

            <div class="secG-info">
              <span class="secG-kicker">LAUNCH &amp; SUPPORT</span>
              <h4>Launch With Ongoing Support</h4>
              <p>
                We handle deployment, train your team and stay on hand with
                ongoing support after the application goes live.
              </p>

              <div class="secG-details">
                <span>Deployment</span>
                <span>Training</span>
                <span>Support</span>
              </div>
            </div>

            <div class="secG-side">
              <span>06</span>
              <strong>Launch</strong>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="secC">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            OUR CUSTOM WEB PORTFOLIO
          </span>

          <h3>
            Custom Web Solutions</br>
            <span>We've Helped Bring to Life.</span>
          </h3>

          <p>
            Explore custom web experiences built around unique business requirements,
            complex workflows, user journeys and scalable digital solutions.
          </p>
        </div>

        <div class="swiper-wrapped">
          <div class="swiper secC-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/website/portfolio/bookEmpire.png" alt="Book Empire online bookstore website"
                      loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>Book Empire</h4>
                      <p>
                        An online bookstore website where readers can explore
                        a wide range of books, with a clean design and easy
                        browsing.
                      </p>
                    </div>

                    <div class="secC-panel__actions">
                      <a href="javascript:void()" target="_blank" rel="noopener" class="btn btn-outline-black">
                        <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em" viewBox="0 0 448 512">
                          <path d="M0 0h448v512H0z" fill="none"></path>
                          <path fill="currentColor"
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6">
                          </path>
                        </svg>
                      </a>
                      <button type="button" class="btn btn-black" data-model=".enquire-pop">
                        Get a Quote
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/website/portfolio/nuvemPrint.png"
                      alt="Nuvem Print digital book printing website" loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>Nuvem Print</h4>
                      <p>
                        A digital printing company website covering book
                        printing, manuals, large format and signage, with
                        in-house design and an easy quote request.
                      </p>
                    </div>

                    <div class="secC-panel__actions">
                      <a href="javascript:void()" target="_blank" rel="noopener" class="btn btn-outline-black">
                        <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em" viewBox="0 0 448 512">
                          <path d="M0 0h448v512H0z" fill="none"></path>
                          <path fill="currentColor"
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6">
                          </path>
                        </svg>
                      </a>
                      <button type="button" class="btn btn-black" data-model=".enquire-pop">
                        Get a Quote
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/website/portfolio/ashton.png"
                      alt="Ashton & Well business setup in Dubai website" loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>Ashton &amp; Well</h4>
                      <p>
                        A corporate services website for business setup in
                        Dubai, covering Mainland, Free Zone and Offshore
                        packages, visas, licenses and bank accounts.
                      </p>
                    </div>

                    <div class="secC-panel__actions">
                      <a href="javascript:void()" target="_blank" rel="noopener" class="btn btn-outline-black">
                        <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em" viewBox="0 0 448 512">
                          <path d="M0 0h448v512H0z" fill="none"></path>
                          <path fill="currentColor"
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6">
                          </path>
                        </svg>
                      </a>
                      <button type="button" class="btn btn-black" data-model=".enquire-pop">
                        Get a Quote
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-group">
            <button type="button" class="secC-prev btn-prev" tabindex="0" aria-label="Previous slide">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
                <path fill="#ffff"
                  d="M609.408 149.376L277.76 489.6a32 32 0 0 0 0 44.672l331.648 340.352a29.12 29.12 0 0 0 41.728 0a30.59 30.59 0 0 0 0-42.752L339.264 511.936l311.872-319.872a30.59 30.59 0 0 0 0-42.688a29.12 29.12 0 0 0-41.728 0">
                </path>
              </svg>
            </button>

            <button type="button" class="secC-next btn-next" tabindex="0" aria-label="Next slide">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
                <path fill="#ffff"
                  d="M609.408 149.376L277.76 489.6a32 32 0 0 0 0 44.672l331.648 340.352a29.12 29.12 0 0 0 41.728 0a30.59 30.59 0 0 0 0-42.752L339.264 511.936l311.872-319.872a30.59 30.59 0 0 0 0-42.688a29.12 29.12 0 0 0-41.728 0">
                </path>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
           15 — BUILD YOUR CUSTOM WEB APP — ENQUIRY
      ============================================================= -->
    <section class="webAppEnquire">
      <div class="container">
        <div class="webAppEnquire-shell">
          <!-- ======================================================
                 LEFT — PROJECT INTRO
            ======================================================= -->
          <div class="webAppEnquire-content">
            <div class="heading">
              <span class="eyebrow"><span class="eyebrow-line"></span>LET'S BUILD SOMETHING
                USEFUL</span>

              <h3>
                Ready To Build Your<br />
                <span>Custom Web Application?</span>
              </h3>

              <p>
                Tell us how your business works, what takes too much time, and
                what you want your application to handle. We'll help turn that
                requirement into a practical digital solution.
              </p>
            </div>

            <!-- PROJECT JOURNEY -->
            <div class="webAppEnquire-journey">
              <div class="webAppEnquire-journey-item">
                <div class="webAppEnquire-journey-icon">
                  <span>01</span>
                </div>

                <div class="webAppEnquire-journey-text">
                  <h4>Tell Us The Problem</h4>
                  <p>Share what's slowing your business or team down.</p>
                </div>
              </div>

              <div class="webAppEnquire-journey-item">
                <div class="webAppEnquire-journey-icon">
                  <span>02</span>
                </div>

                <div class="webAppEnquire-journey-text">
                  <h4>Explain Your Workflow</h4>
                  <p>Help us understand how your current process works.</p>
                </div>
              </div>

              <div class="webAppEnquire-journey-item">
                <div class="webAppEnquire-journey-icon">
                  <span>03</span>
                </div>

                <div class="webAppEnquire-journey-text">
                  <h4>Shape The Solution</h4>
                  <p>
                    We explore the right features, workflow and technology.
                  </p>
                </div>
              </div>
            </div>

            <!-- BOTTOM NOTE -->
            <div class="webAppEnquire-note">
              <span class="webAppEnquire-note-icon">✓</span>

              <div>
                <strong>No Technical Specification Required</strong>
                <p>
                  You don't need to know how the application should be built.
                  Just tell us what you need it to do.
                </p>
              </div>
            </div>
          </div>

          <!-- ======================================================
                 RIGHT — ENQUIRY FORM
            ======================================================= -->
          <div class="webAppEnquire-formWrap">
            <div class="webAppEnquire-formHead">
              <div>
                <span class="webAppEnquire-formEyebrow">START YOUR PROJECT</span>

                <h4>Tell Us About Your Application</h4>
              </div>

              <span class="webAppEnquire-formMark">↗</span>
            </div>

            <form class="webAppEnquire-form">
              <!-- NAME -->
              <div class="webAppEnquire-field">
                <label for="app-name">Your Name</label>

                <input id="app-name" type="text" name="name" placeholder="Enter your name" required />
              </div>

              <!-- BUSINESS -->
              <div class="webAppEnquire-field">
                <label for="app-business">Business / Company Name</label>

                <input id="app-business" type="text" name="business" placeholder="Enter your business name" />
              </div>

              <!-- EMAIL + PHONE -->
              <div class="webAppEnquire-row">
                <div class="webAppEnquire-field">
                  <label for="app-email">Work Email</label>

                  <input id="app-email" type="email" name="email" placeholder="you@company.com" required />
                </div>

                <div class="webAppEnquire-field">
                  <label for="app-phone">Phone Number</label>

                  <input id="app-phone" type="tel" name="phone" placeholder="Your phone number" />
                </div>
              </div>

              <!-- APPLICATION TYPE -->
              <div class="webAppEnquire-field">
                <label for="app-type">What Do You Want To Build?</label>

                <div class="webAppEnquire-select">
                  <select id="app-type" name="application_type">
                    <option value="">Select Application Type</option>
                    <option value="crm">CRM</option>
                    <option value="erp">ERP</option>
                    <option value="management-system">
                      Management System
                    </option>
                    <option value="booking-system">Booking System</option>
                    <option value="customer-portal">Customer Portal</option>
                    <option value="vendor-portal">Vendor Portal</option>
                    <option value="saas-platform">SaaS Platform</option>
                    <option value="dashboard">Dashboard</option>
                    <option value="workflow-application">
                      Workflow Application
                    </option>
                    <option value="quote-invoice-system">
                      Quote / Invoice System
                    </option>
                    <option value="other">Other</option>
                  </select>
                </div>
              </div>

              <!-- REQUIREMENT -->
              <div class="webAppEnquire-field">
                <label for="app-requirement">
                  Tell Us About Your Requirement
                </label>

                <textarea id="app-requirement" name="requirement" rows="4"
                  placeholder="Tell us how your business currently works and what you want to improve."></textarea>
              </div>

              <!-- SUBMIT -->
              <div class="webAppEnquire-submit">
                <button type="submit" class="btn btn-black">
                  Discuss My Application
                  <i>↗</i>
                </button>

                <span class="webAppEnquire-submit-note">
                  We'll review your requirement and get back to you.
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
           16 — secN — FAQ
      ============================================================= -->
    @include('partials.page-faqs', [
      'title' => 'Questions About Custom Web<span> Application Development?</span>',
      'intro' => 'Clear answers to common questions about building a custom web application with Web Mingo.',
    ])

    <!-- ============================================================
           17 — cta-promo — FINAL CTA
      ============================================================= -->
    <div class="container">
      <div class="cta-promo">
        <div class="cta-promo__inner">
          <span class="cta-promo__eyebrow">HAVE A BUSINESS PROCESS YOU WANT TO DIGITIZE?</span>

          <h3 class="cta-promo__heading">
            Let's Build A Custom Application<br />
            For Your Business.
          </h3>

          <p class="cta-promo__sub">
            Tell us how your business currently works, what is slowing your
            team down and what you want to improve. We'll help you explore
            what a custom application could look like.
          </p>

          <div class="cta-promo__actions">
            <button class="btn btn-white" data-model=".enquire-pop">
              Start A Conversation
            </button>

            <a href="javascript:void(0)" class="btn btn-outline-white">
              Chat on WhatsApp
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- ============================================================
           SEO LINKS (existing .secO)
      ============================================================= -->
    <section class="secO">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            MORE FROM WEB MINGO
          </span>

          <h3>Your Digital Journey, <span>Continues.</span></h3>

          <p>
            Explore our digital solutions, latest work, and the services built
            to help your business grow online.
          </p>
        </div>

        <ul class="secO-grid">
          <li>
            <a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <rect x="3" y="3" width="18" height="18" rx="2" />
                  <path d="M3 9h18M9 21V9" />
                </svg></span><em>E-Commerce</em></a>
          </li>
          <li>
            <a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <path d="M8 3L3 8l5 5M16 3l5 5-5 5M14 4l-4 16" />
                </svg></span><em>Web Apps</em></a>
          </li>
          <li>
            <a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <rect x="7" y="2" width="10" height="20" rx="2" />
                  <path d="M11 18h2" />
                </svg></span><em>Mobile Apps</em></a>
          </li>
          <li>
            <a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <circle cx="11" cy="11" r="7" />
                  <path d="M21 21l-4.3-4.3" />
                </svg></span><em>SEO</em></a>
          </li>
          <li>
            <a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <path d="M3 3v18h18" />
                  <path d="M7 15l4-4 3 3 5-6" />
                </svg></span><em>Marketing</em></a>
          </li>
          <li>
            <a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <path d="M12 19l7-7 3 3-7 7-3-3z" />
                  <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z" />
                </svg></span><em>Portfolio</em></a>
          </li>
          <li>
            <a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <circle cx="12" cy="8" r="4" />
                  <path d="M4 21c0-4 4-6 8-6s8 2 8 6" />
                </svg></span><em>About Us</em></a>
          </li>
          <li>
            <a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <path d="M4 4h16v16H4z" />
                  <path d="M4 6l8 7 8-7" />
                </svg></span><em>Contact Us</em></a>
          </li>
        </ul>
      </div>
    </section>
  </main>
@endsection