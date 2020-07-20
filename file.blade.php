@extends('layouts.master')

@section('page_css')
		<link rel="stylesheet" type="text/css" href="{{ asset('input/css/component.css') }}" />
        <!-- <link href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css" rel="stylesheet"> -->
        <link rel = "stylesheet" type="text/css" href="{{ asset('assets/css/light-gallery.css') }}" >
@endsection

@section('custom_css')
    <style>
      
        #size {
            font-size: .8rem !important;
        }

        .cif_padding {
            padding-right: .3px !important;
        }

        .cif_padding2 {
            padding-left: 1px !important;
        }

        .col3 {
            width : 20% !important;
        }

        .cif_images{
            height: 250px;
            width: 250px;
        }
        .comaker_image{
            height: 100px;
            width: 100px;
        }
        .pad{
            padding-bottom: 10px;
        }
        .fixed-size.lg-outer .lg-inner {
            background-color: #FFF;
        }
        .fixed-size.lg-outer .lg-sub-html {
            position: absolute;
            text-align: left;
        }
        .fixed-size.lg-outer .lg-toolbar {
            background-color: transparent;
            height: 0;
        }
        .fixed-size.lg-outer .lg-toolbar .lg-icon {
            color: #FFF;
        }
        .fixed-size.lg-outer .lg-img-wrap {
            padding: 12px;
        }
    </style>
@endsection

@section('content')
<div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row ">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <!-- <h2 class="content-header-title">Client Information File</h2> -->
          </div>
          <!-- <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Basic Forms</a>
                </li>
              </ol>
            </div>
          </div> -->
        </div>
        <div class="content-body">
            @include('header.header')
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Client Information File</h4>
                        </div>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <!-- <div class="card-text">
                                        <p>This is the most basic and default form having form sections. To add form section use <code>.form-section</code> class with any heading tags. This form has the buttons on the bottom left corner which is the default position.</p>
                                    </div> -->
                                    <form class="form" >
                                        <div class="form-body">
                                            <h4 class="form-section page1"><i class="icon-clipboard"></i> Products and Services</h4>
                                            <div class="row page1">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Loan Product Type</label>
                                                        <select disabled id="loan_prod_type" name="loan_prod_type" class="form-control">
                                                            @foreach($loan_products as $prod)
                                                                <option value="{{ $prod->loandesc}}">{{$prod->loandesc}}</option>
                                                            @endforeach
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Deposit Product</label>
                                                        <select disabled id="deposit_prod" name="deposit_prod" class="form-control">
                                                            @foreach($deposit_products as $prod)
                                                                <option value="{{ $prod->clsdesc}}">{{$prod->clsdesc}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Loan Cycle</label>
                                                        <select disabled id="loan_cycle" name="loan_cycle" class="form-control">
                                                            @php
                                                                for($ndx = 1 ; $ndx <=100 ; $ndx++)
                                                                {
                                                                  echo "<option value=".$ndx.">".$ndx."</option>";
                                                                }
                                                            @endphp
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row page1">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Loan Availment Type</label>
                                                        <select disabled id="loan_avail_type" name="loan_avail_type" class="form-control">
                                                            <option value="NEW LOAN">NEW LOAN</option>
                                                            <option value="RELOAN">RELOAN</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Deposit Classification</label>
                                                        <select disabled id="deposit_class" name="deposit_class" class="form-control">
                                                            <option value="N/A">N/A</option>
                                                            <option value="INDIVIDUAL">INDIVIDUAL</option>
                                                            <option value="JOINT (AND)">JOINT (AND)</option>
                                                            <option value="JOINT (OR)">JOINT (OR)</option>
                                                            <option value="SOLE PROPRIETORSHIP">SOLE PROPRIETORSHIP</option>
                                                            <option value="PARTNERSHIP">PARTNERSHIP</option>
                                                            <option value="CORPORATION">CORPORATION</option>
                                                            <option value="ITF">IN-TRUST-FOR(ITF)</option>
                                                            <option value="OTHER">OTHER</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Client Type</label>
                                                        <select disabled id="client_type" name="client_type" class="form-control">
                                                            <option value="N/A">N/A</option>
                                                            <option value="NEW">NEW</option>
                                                            <option value="EXISTING">EXISTING</option>
                                                            <option value="EMPLOYEE">EMPLOYEE</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <h4 class="form-section page1"><i class="icon-head"></i> Personal Information</h4>
                                            <div class="row page1">
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Title</label>
                                                        <select disabled id="title" name="title" class="form-control form-control1">
                                                            <option value="MR.">Mr.</option>
                                                            <option value="MS.">Ms.</option>
                                                            <option value="MRS.">Mrs.</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput2">Last Name</label>
                                                        <input readonly type="text" id="lname" class="form-control" placeholder="Last Name" name="lname">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput2">Given Name</label>
                                                        <input readonly type="text" id="gname" class="form-control" placeholder="Given Name" name="gname">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput2">Middle Name</label>
                                                        <input readonly type="text" id="mname" class="form-control" placeholder="Middle Name" name="mname">
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            <div class="row page1">
                                                <div class="col-md-12">
                                                <h5>Present Address</h5>
                                                </div>
                                            </div>
                                            <div class="row page1">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="projectinput5">No./Street/Sitio</label>
                                                        <select disabled id="present_street" name="present_street" class="form-control form-control1">
                                                            <option value="" disabled selected>Select Option</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput5">District/Barangay</label>
                                                        <select disabled id="present_district" name="present_district" class="form-control form-control1">
                                                            <option value="" disabled selected>Select Option</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Municipality/City</label>
                                                        <select disabled id="present_city" name="present_city" class="form-control form-control1">
                                                           @foreach($municipals as $municipal)
                                                            <option value="{{ $municipal->MunCode }}" _id = "{{ $municipal->ZipCode }}">{{ $municipal->MunDesc }}</option>
                                                           @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Province</label>
                                                        <select disabled id="present_province" name="present_province" class="form-control form-control1">
                                                                @foreach($provinces as $province)
                                                                    <option value="{{ $province->provcode }}">{{$province->provdesc}}</option>
                                                                @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="projectinput2" id="size">LENGTH OF STAY</label>
                                                        <input readonly type="text" id="present_stay" class="form-control"  name="present_stay">
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label for="projectinput2" id="size">ZIP CODE</label>
                                                        <input readonly type="text" id="present_zcode" class="form-control"  name="present_zcode">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row page1">
                                                <div class="col-md-12">
                                                <h5>Permanent Address</h5>
                                                </div>
                                            </div>
                                            <div class="row page1">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="projectinput5">No./Street/Sitio</label>
                                                        <select disabled id="permanent_street" name="permanent_street" class="form-control form-control1">
                                                            <option value="" disabled selected>Select Option</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput5">District/Barangay</label>
                                                        <select disabled id="permanent_district" name="permanent_district" class="form-control form-control1">
                                                            <option value="" disabled selected>Select Option</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Municipality/City</label>
                                                        <select disabled id="permanent_city" name="permanent_city" class="form-control form-control1">
                                                            @foreach($municipals as $municipal)
                                                                <option value="{{ $municipal->MunCode }}" _id = "{{ $municipal->ZipCode }}">{{ $municipal->MunDesc }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Province</label>
                                                        <select disabled id="permanent_province" name="permanent_province" class="form-control form-control1">
                                                                @foreach($provinces as $province)
                                                                    <option value="{{ $province->provcode }}">{{$province->provdesc}}</option>
                                                                @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="projectinput2" id="size">LENGTH OF STAY</label>
                                                        <input readonly type="text" id="permanent_stay" class="form-control"  name="permanent_stay">
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label for="projectinput2" id="size">ZIP CODE</label>
                                                        <input readonly type="text" id="permanent_zcode" class="form-control"  name="permanent_zcode">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row page1">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Email Address</label>
                                                        <input readonly type="email" id="email" class="form-control"  name="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Phone Number</label>
                                                        <input readonly type="number" id="phone_number" class="form-control"  name="phone_number">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Mobile/Cell Number</label>
                                                        <input readonly type="number" id="mobile_number" class="form-control"  name="mobile_number">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Date of Birth</label>
                                                        <input readonly type="date" id="date" class="form-control"  name="date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row page1">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Place of Birth</label>
                                                        <input readonly type="text" id="pob" class="form-control"  name="pob">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Citizenship/Nationality</label>
                                                        <input disabled id="citizenship" name="citizenship" class="form-control form-control1">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                    <label for="projectinput5">Gender</label>
                                                        <select disabled id="gender" name="gender" class="form-control form-control1">
                                                            <option value="FEMALE">FEMALE</option>
                                                            <option value="MALE">MALE</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Civil Status</label>
                                                        <select disabled id="civil_status" name="civil_status" class="form-control form-control1">
                                                            <option value="SINGLE">SINGLE</option>
                                                            <option value="MARRIED">MARRIED</option>
                                                            <option value="SEPARATED">SEPARATED</option>
                                                            <option value="WIDOWED">WIDOWED</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row page1">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Spouse Name</label>
                                                        <input readonly type="text" id="spouse_name" class="form-control"  name="spouse_name">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Mother's Maiden Name</label>
                                                        <input readonly type="text" id="maiden_name" class="form-control"  name="maiden_name">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Source of Funds</label>
                                                        <select disabled id="source_funds" name="source_funds" class="form-control ">
                                                            <option value="SALARY">Salary</option>
                                                            <option value="BUSINESS">Business</option>
                                                            <option value="COMMISSION/FEES">Commission/Fees</option>
                                                            <option value="REMITTANCE">Remittance</option>
                                                            <option value="OTHERS">Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Estimated AMNT of Monthly Income</label>
                                                        <select disabled id="monthly_income" name="monthly_income" class="form-control ">
                                                            <option value="BELOW P10, 000">Below P10,000</option>
                                                            <option value="P10, 000 - P500, 000">P10,000 - P500,000</option>
                                                            <option value="ABOVE P500, 000">Above P500,000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row page1">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Name of Employer/Business(if self-employed)</label>
                                                        <input readonly type="text" id="emp_business" class="form-control"  name="emp_business">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Position/Designation</label>
                                                        <input readonly type="text" id="position" class="form-control"  name="position">
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Govt. ID Presented</label>
                                                        <select disabled id="gov_id" name="gov_id" class="form-control ">
                                                            @foreach($ID as $id)
                                                                <option value="{{ trim($id->IDCode)}}">{{$id->IDDesc}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="projectinput5">ID Number</label>
                                                        <input readonly type="text" id="gov_id_number" class="form-control"  name="gov_id_number">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Security Type</label>
                                                        <input readonly type="text" id="security_type" class="form-control"  name="security_type">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row page1">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Business Address</label>
                                                        <input readonly type="text" id="business_add" class="form-control"  name="business_add">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput5">ZIP Code</label>
                                                        <input readonly type="text" id="business_code" class="form-control"  name="business_code">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Business Contact Number</label>
                                                        <input readonly type="text" id="business_number" class="form-control"  name="business_number">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Telefax Number</label>
                                                        <input readonly type="text" id="telefax_number" class="form-control"  name="telefax_number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row page1">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Business Type</label>
                                                        <input disabled type="text" id="business_type" name="business_type" class="form-control form-control1">
                                
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Date Started</label>
                                                        <input readonly type="date" id="date_started" class="form-control"  name="date_started">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Business</label>
                                                        <input readonly type="text" id="business" name="business" class="form-control">
                                    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row page1">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Nature of Work/Business</label>
                                                        <input readonly type="text" id="business_nature" class="form-control"  name="business_nature">
                                                        <!-- <select disabled id="business_nature" name="business_nature" class="form-control">
                                                            <option value="N/A">N/A</option>
                                                        </select> -->
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Employment Status(if employed)</label>
                                                        <select disabled id="emp_status" name="emp_status" class="form-control ">
                                                            <option value=""></option>
                                                            <option value="REGULAR">REGULAR</option>
                                                            <option value="PROBITIONARY">PROBITIONARY</option>
                                                            <option value="CONTRACTUAL">CONTRACTUAL</option>
                                                            <option value="ON CALL">ON CALL</option>
                                                            <option value="PARTIME">PARTIME</option>
                                                            <option value="SUMMER JOB">SUMMER JOB</option>
                                                            <option value="NOT APPLICABLE">NOT APPLICABLE</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Length of Service</label>
                                                        <select disabled id="length_service" name="length_service" class="form-control form-control1">
                                                            <option value="GREATER THAN 5 YEARS">GREATER THAN 5 YEARS</option>
                                                            <option value="ONE YEAR TO LESS THAN 5 YEARS">ONE YEAR TO LESS THAN 5 YEARS</option>
                                                            <option value="EXPECTED MONTHLY INCOME FROM BUSINESS">EXPECTED MONTHLY INCOME FROM BUSINESS</option>
                                                            <option value="PROBATIONARY/TRAINEE/APPRENTICE/LESS THAN 2 YEARS">PROBATIONARY/TRAINEE/APPRENTICE/LESS THAN 2 YEARS</option>
                                                        </select>   
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row page1">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Expected Net Monthly Salary</label>
                                                        <input readonly type="number" id="monthly_salary" class="form-control"  name="monthly_salary" placeholder="0" onkeydown="return event.keyCode !== 69">
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput5" id="size">Expected Monthly Net Income of Other Family Members</label>
                                                        <input readonly type="number" id="monthly_members" class="form-control"  name="monthly_members" placeholder="0" onkeydown="return event.keyCode !== 69">
                                                        
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Expected Monthly Income From Business</label>
                                                        <input readonly type="number" id="monthly_business" class="form-control"  name="net_monthly" placeholder="0" onkeydown="return event.keyCode !== 69">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row page1">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Expected Net Monthly Remittance</label>
                                                        <input readonly type="number" id="monthly_remittance" class="form-control"  name="monthly_remittance" placeholder="0" onkeydown="return event.keyCode !== 69">
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Expected Monthly Net Pension</label>
                                                        <input readonly type="number" id="monthly_pension" class="form-control"  name="monthly_pension" placeholder="0" onkeydown="return event.keyCode !== 69 ">
                                                        
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Expected Monthly Other Income</label>
                                                        <input readonly type="number" id="monthly_other" class="form-control"  name="monthly_other" placeholder="0" onkeydown="return event.keyCode !== 69">
                                                    </div>
                                                </div>
                                            </div>
                                            <h4 class="form-section page2" style="display:none"><i class="icon-images2"></i>Pictures</h4>
                                            <div class="row page2 pad" style="display:none">
                                                <div class="col-md-3">
                                                    <img src="{{ asset('app-assets/images/broken-1.png' ) }}" alt="" class="cif_images" id="CLIENTID">
                                                    <center><label for="projectinput5" >Client ID</label></center>
                                                </div>
                                                <div class="col-md-3">
                                                    <img src="{{ asset('app-assets/images/broken-1.png' ) }}" alt="" class="cif_images" id="PRESENTADDR">
                                                     <center><label for="projectinput5">Residence</label></center>
                                                </div>
                                                <div class="col-md-3">
                                                    <img src="{{ asset('app-assets/images/broken-1.png' ) }}" alt="" class="cif_images" id="VALIDIDS">
                                                     <center><label for="projectinput5">Valid ID</label></center>

                                                </div>
                                                <div class="col-md-3">
                                                    <img src="{{ asset('app-assets/images/broken-1.png' ) }}" alt="" class="cif_images" id="PROOFOFBILL">
                                                     <center><label for="projectinput5">Proof of Billing</label></center>
                                                </div>
                                            </div>
                                            <div class="row page2 pad" style="display:none">
                                                <div class="col-md-3">
                                                    <img src="{{ asset('app-assets/images/broken-1.png' ) }}" alt="" class="cif_images" id="PAYSLIP">
                                                     <center><label for="projectinput5">Payslip</label></center>
                                                </div>
                                                <div class="col-md-3">
                                                    <img src="{{ asset('app-assets/images/broken-1.png' ) }}" alt="" class="cif_images" id="BRGYCERT">
                                                     <center><label for="projectinput5">Barangay Certificate</label></center>
                                                </div>
                                                <div class="col-md-3">
                                                    <img src="{{ asset('app-assets/images/broken-1.png' ) }}" alt="" class="cif_images" id="BUSINESS">
                                                     <center><label for="projectinput5">Business</label></center>
                                                </div>
                                                <div class="col-md-3">
                                                    <img src="{{ asset('app-assets/images/broken-1.png' ) }}" alt="" class="cif_images" id="REMITTANCE">
                                                     <center><label for="projectinput5">Remittance</label></center>
                                                </div>
                                            </div>
                                            <div class="row page2 pad" style="display:none">
                                                <div class="col-md-3">
                                                    <img src="{{ asset('app-assets/images/broken-1.png' ) }}" alt="" class="cif_images" id="COMMISSION">
                                                     <center><label for="projectinput5">Commission/Fees</label></center>
                                                </div>
                                                <div class="col-md-3">
                                                    <img src="{{ asset('app-assets/images/broken-1.png' ) }}" alt="" class="cif_images" id="BANKSTATEMENT">
                                                     <center><label for="projectinput5">Bank Statement</label></center>
                                                </div>
                                                <div class="col-md-3">
                                                    <img src="{{ asset('app-assets/images/broken-1.png' ) }}" alt="" class="cif_images" id="CLIENTENDORSEMENT">
                                                     <center><label for="projectinput5">Client Endorsement</label></center>
                                                </div>
                                                <div class="col-md-3">
                                                    <img src="{{ asset('app-assets/images/broken-1.png' ) }}" alt="" class="cif_images" id="CERTFULLPAYMENT">
                                                     <center><label for="projectinput5">Center Chief Issued Certiticate</label></center>
                                                </div>
                                            </div>
                                            <div class="row page2 pad" style="display:none">
                                                <div class="col-md-3">
                                                    <img src="{{ asset('app-assets/images/broken-1.png' ) }}" alt="" class="cif_images" id="ADDDOCSBUYOUT">
                                                     <center><label for="projectinput5">Addition Document Photo</label></center>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions right">
                                           <button type="button" class="btn btn-default mr-1" id="previouss">
                                                 Previous 
                                            </button>
                                            <button type="button" class="btn btn-default mr-1" id="next">
                                                 Next 
                                            </button>
                                            @role('CLP')
                                            <button type="button" class="btn btn-info" disabled id="btnSave" onclick="save_cif();">
                                                 Save
                                            </button>
                                            @endrole
                                        </div>

                                        <!-- <div class="left">
                                            <button type="button" class="btn btn-default mr-1 print" data-link="{{ route('previewCIF')}}" id="printCIF">
                                                 Print CIF 
                                            </button>
                                            <button type="button" class="btn btn-default mr-1 print" data-link="{{ route('previewCashFlow')}}" id="printCashFlow">
                                                 Print Cashflow 
                                            </button>
                                            <button type="button" class="btn btn-default mr-1 print" data-link="{{ route('previewScoring')}}" id="printScoring">
                                                 Print Scoring 
                                            </button>
                                            <button type="button" class="btn btn-default mr-1 print" data-link="{{ route('previewCGTCRT')}}" id="printCGTCRT">
                                                 Print CGTCRT 
                                            </button>
                                        </div> -->

                                        @include('layouts.btnReports')
                                       @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          </div>
      </div>
    </div>
@endsection

@section('custom_js')
    <!-- <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script> -->
    <script src="{{ asset('assets/js/lightgallery.js') }}"></script>

    <script>
           var bool = false;
           var images = null;
           var target = null;
        $(document).ready(function() {
           
            $('#next').on('click',function(){
                $('.page1').hide();
                $('.page2').show();
            });

             $('#previouss').on('click',function(){
                 console.log('herer');
                $('.page2').hide();
                $('.page1').show();
            });

            var CIFNo = sessionStorage.getItem('CIFNo');

            if(CIFNo){
                getCIFDetails(CIFNo);
            }else {
                @if($CIFNo) 
                console.log("{{$CIFNo}}");
                    getCIFDetails("{{$CIFNo}}");
                @endif
            }

            $('#permanent_province').on('change',function(){
                var id = $(this).val();
                console.log('province');
                $.get('/getMunicipality',{ prov_code : id }, function (datas) {
                    console.log('hello'+datas);
                    var select = $('#permanent_city');
                    $('#permanent_district').empty();
                    $('#permanent_street').empty();
                    select.empty();
                    select.append($("<option></option>").text(""))    ;
                    $.each(datas, function(key, data) {
                      
                        select.append($("<option _id='" + data.ZipCode +"'></option>").attr("value",data.MunCode).attr('_zip',data.ZipCode)
                                                             .text(data.MunDesc)) ;
                    });

                });
            });

            $('#present_province').on('change',function(){
                var id = $(this).val();
                console.log('province');

                $.get('/getMunicipality',{ prov_code : id }, function (datas) {
                    console.log(datas);
                    var select = $('#present_city');
                    $('#present_district').empty();
                    $('#present_street').empty();

                    select.empty();
                    select.append($("<option></option>").text(""))    ;
                    $.each(datas, function(key, data) {
                    
                        select.append($("<option _id='" + data.ZipCode +"'></option>").attr("value",data.MunCode)
                                                             .text(data.MunDesc))    ;
                    });

                });
            });

            $('#present_city').on('change',function(){
                var id = $(this).val();
                console.log('city');
                var zip =  $('#present_city option:selected').attr('_id')
                console.log(zip);
                $('#present_zcode').val(zip);
                $.get('/getBarangay',{ muncode : id }, function (datas) {
                    var select = $('#present_district');
                    $('#present_street').empty();
                    select.empty();
                    select.append($("<option></option>").text(""))    ;
                    $.each(datas, function(key, data) {
                        select.append($("<option></option>").attr("value",data.BrgyCode)
                                                             .text(data.BrgyDesc))    ;
                    });

                });
            });
        
            $('#present_district').on('change',function(){
                console.log('district');
                
                var id = $(this).val();
                var mun = $('#present_city').val();
                $.get('/getSitio/' +id +'/'+mun, function (datas) {
                    var select = $('#present_street');
                  
                    select.empty();
                    select.append($("<option></option>").text(""))    ;

                    $.each(datas, function(key, data) {
                        select.append($("<option></option>").attr("value",data.sitcode)
                                                             .text(data.sitdesc))    ;
                    });

                });
            });

            $('#permanent_city').on('change',function(){
                console.log('city');
                var zip = $('#permanent_city option:selected').attr('_id')
                console.log(zip);
                $('#permanent_zcode').val(zip);
                var id = $(this).val();
                $.get('/getBarangay', { muncode : id }, function (datas) {
                    var select = $('#permanent_district');
                    $('#permanent_street').empty();
                    select.empty();
                    select.append($("<option></option>").text(""))    ;
                    $.each(datas, function(key, data) {
                        select.append($("<option></option>").attr("value",data.BrgyCode)
                                                             .text(data.BrgyDesc))    ;
                    });

                });
            });
        
            $('#permanent_district').on('change',function(){
                console.log('district');

                var id = $(this).val();
                var mun = $('#permanent_city').val();
                $.get('/getSitio/' +id +'/'+mun, function (datas) {
                    var select = $('#permanent_street');

                    select.empty();
                    select.append($("<option></option>").text(""))   ;

                    $.each(datas, function(key, data) {
                        select.append($("<option></option>").attr("value",data.sitcode)
                                                             .text(data.sitdesc))    ;
                    });

                });
            });
            // var bool = false;
            $('.cif').on('click','tbody tr', function(){
                // alert($(this).attr('id'));
                var id  = $(this).attr('id');
                console.log('here');
                $('.iconModal').modal('hide');
                getCIFDetails(id);
                
            });

            $('img.cif_images').on('click', function() {
                // $(this).lightGallery().data('lightGallery').destroy(true);
                var id = $(this).attr('id');
                console.log(images);
                var data = [];

                images.map(function(item) {  
                    if(item.ImageId == id && item.path){
                        data.push({ 
                            // "src" : "http://10.104.64.37/fbapi/"+item.path,
                            // "thumb"  : "http://10.104.64.37/fbapi/"+item.path,

                            "src" : "http://10.104.64.14/fbapi/"+item.path,
                            "thumb"  : "http://10.104.64.14/fbapi/"+item.path,
                        });
                    } 
                    
                    if (!item.path && item.ImageId == id  ) {
                        data.push({ 
                            "src" : "data:image/jpeg;base64,"+item.ImgText,
                            "thumb" : "data:image/jpeg;base64,"+item.ImgText,
                        });
                    }
                })

                if(data.length < 1) {
                    data.push({
                        "src": "{{ asset('app-assets/images/broken-1.png' ) }}",
                        "thumb" : "{{ asset('app-assets/images/broken-1.png' ) }}",
                    });
                }
                console.log("++++++++++++++++++++++++++++++++++++++++++++++++++=")
                console.log(data);
                 // $(this).lightGallery().data('lightGallery').destroy(true);
                  target = $(this);
                 
                //  if ( $(this).lightGallery().data('lightGallery')){
                //     $(this).lightGallery().data('lightGallery').destroy(true);
                //     setTimeout(function()
                //     {
                //         target.lightGallery({
                //             dynamic: true,
                //             width: '700px',
                //             height: '470px',
                //             mode: 'lg-fade',
                //             addClass: 'fixed-size',
                //             counter: false,
                //             download: false,
                //             startClass: '',
                //             enableSwipe: false,
                //             enableDrag: false,
                //             speed: 500,
                //             dynamicEl: data,
                //                 });
                //     }, 250);
                //  }

                //  setTimeout(function()
                //     {
                        target.lightGallery({
                            dynamic: true,
                            width: '700px',
                            height: '470px',
                            mode: 'lg-fade',
                            addClass: 'fixed-size',
                            counter: false,
                            download: false,
                            startClass: '',
                            enableSwipe: false,
                            enableDrag: false,
                            speed: 500,
                            dynamicEl: data,
                                });
                    // }, 1000);

              
                    target.on('onBeforeClose.lg',function(event){
                         $(this).lightGallery().data('lightGallery').destroy(true);
                });
            });                                          
           
            
        });

        function getBarangay(id,code,val){
          
            $.get('/getBarangay' ,{ muncode : id } , function (datas) {
                    var select = $('#present_district');
                    if(val == 0)
                    {
                        select = $('#permanent_district');
                    }
                  
                    

                    select.empty();

                    $.each(datas, function(key, data) {
                        // console.log(data.BrgyCode);
                        if(code == data.BrgyCode){
                            select.append($("<option selected></option>").attr("value",data.BrgyCode)
                                                             .text(data.BrgyDesc))    ;
                                                            
                        }else {

                            select.append($("<option></option>").attr("value",data.BrgyCode)
                                                             .text(data.BrgyDesc))    ;
                        }
                    });

                });
        } 

        function getSitio(mun,id,code,val){
            $.get('/getSitio/' +id +'/'+mun, function (datas) {
                    var select = $('#present_street');

                    if(val == 0){           
                        select = $('#permanent_street');
                    }
                   
                    select.empty();
                    select.append($("<option></option>").text(""))    ;

                    $.each(datas, function(key, data) {

                        if(code == data.sitcode){
                            select.append($("<option selected></option>").attr("value",data.sitcode)
                                                             .text(data.sitdesc))    ;
                        }else {
                             select.append($("<option></option>").attr("value",data.sitcode)
                                                             .text(data.sitdesc))    ;
                        }
                    });

                });
        }

        function getCIFDetails(id){
            changeUrl(bool,id);
                 
            bool = true;
                $.get('/getCIFInfo', {
                    'CIFNo' : id,
                })
                .done(function(data){
                    console.log(data)
                    populateDetails(data);
                });
        }

        function populateDetails (data) {
                    // console.log(data);
                    $('#branch').val(data.CIF.BranchCode);
                    $('#app_no').val(data.LAAnalysis.ApplicationNo);
                    $('#account_no').val(data.CIF.acctnumbr);
                    $('#cif_number').val(data.CIF.CIFNo);
                    $('#loan_prod_type').val(data.LAAnalysis.prodLoanType);
                    $('#deposit_prod').val(data.LAAnalysis.depProd);
                    $('#loan_cycle').val(data.LAAnalysis.loanCycle);
                    $('#loan_avail_type').val(data.LAAnalysis.loanType);
                    sessionStorage.setItem('loanType',data.LAAnalysis.loanType);
                    $('#deposit_class').val(data.LAAnalysis.depProdClass);
                    $('#client_type').val(data.LAAnalysis.depType);
                    $('#title').val(data.CIF.title);
                    $('#lname').val(data.CIF.lname);
                    $('#gname').val(data.CIF.fname);
                    $('#mname').val(data.CIF.mname);
                    $('#nname').val(data.CIF.nickname);
                    $('#present_province').val(data.CIF.prProvince);
                    $('#present_city').val(data.CIF.prMunicipality);
                    $('#permanent_province').val(data.CIF.peProvince);
                    $('#permanent_city').val(data.CIF.peMunicipality);
                    $('#present_stay').val(data.CIF.prlengthStay);
                    $('#present_zcode').val(data.CIF.przipCode);
                    $('#permanent_stay').val(data.CIF.pelengthStay);
                    $('#permanent_zcode').val(data.CIF.pezipCode);

                    getBarangay(data.CIF.prMunicipality,data.CIF.prBarangay,1);
                    getSitio(data.CIF.prMunicipality,data.CIF.prBarangay,data.CIF.prSitio,1);
                    getBarangay(data.CIF.peMunicipality,data.CIF.peBarangay,0);
                    getSitio(data.CIF.peMunicipality,data.CIF.peBarangay,data.CIF.peSitio,0);

                    $('#email').val(data.CIF.emailAdd);
                    $('#mobile_number').val(data.CIF.MobileContactNo);
                    $('#phone_number').val(data.CIF.TeleContactNo);
                    var date = data.CIF.BirthDate.split(" ");
                    console.log(date[0]);
                    $('#date').val(date[0]);
                    $('#pob').val(data.CIF.BirthPlace);
                    $('#citizenship').val(data.CIF.nationality);
                    $('#gender').val(data.CIF.gender);
                    $('#civil_status').val(data.CIF.civilStatus);
                    $('#spouse_name').val(data.CIF.SpouseName);
                    $('#maiden_name').val(data.CIF.MMfname+' '+data.CIF.MMlname+' '+data.CIF.MMmname);
                    $('#source_funds').val(data.CIF.sourceFund);
                    $('#monthly_income').val(data.CIF.estimatedAmtMonthlyIncome);
                    $('#emp_business').val(data.CIF.employerName);
                    $('#position').val(data.CIF.empDesignation);
                    $('#gov_id').val(data.CIF.IDTYPE.trim());
                    $('#gov_id_number').val(data.CIF.IDNO);
                    $('#business_add').val(data.CIF.BUAddress);
                    $('#business_code').val(data.CIF.BUzipCode);
                    $('#telefax_number').val(data.CIF.BUfaxNo);
                    $('#business_number').val(data.CIF.BUContactNo);
                    $('#business_type').val(data.CIF.BUType);
                    $('#security_type').val(data.CIF.SECURITY_TYPE);
                    date = data.CIF.BUDateStarted.split(" ");
                    $('#date_started').val(date[0]);
                    $('#business').val(data.CIF.BUSINESS);
                    $('#business_nature').val(data.CIF.natureOfBU);
                    $('#emp_status').val(data.CIF.empStatus);
                    $('#length_service').val(data.CIF.LENGTHOFSERVICE);
                    $('#monthly_salary').val(data.CIF.EXPECTEDNETMONTHLYSALARY);
                    $('#monthly_members').val(data.CIF.EXPECTEDMONTHLYNETINCOMEOFOTHE);
                    $('#monthly_business').val(data.CIF.EXPECTEDMONTHLYINCOMEFROMBUSIN);
                    $('#monthly_remittance').val(data.CIF.EXPECTEDNETMONTHLYREMITTANCE);
                    $('#monthly_pension').val(data.CIF.EXPECTEDMONTHLYNETPENSION);
                    $('#monthly_other').val(data.CIF.EXPECTEDMONTHLYOTHERINCOME);
                    if(data.CIF.EXPECTEDMONTHLYOTHERINCOME==0){
                        $('#monthly_other').val(data.CIF.ExpectedNetMoOtherSource1);
                    }
                    
                    clearImages();
                    displayImages(data.images);
                    images = null;
                    images = data.images;
                    console.log(images);    

                    @if(@auth()->user()->roles[0]->name == 'CLP')
                         enabledFields();
                    @else
                        disableFields();
                    @endif
        }   

        function displayImages(data)
        {   
            $.each(data,function(key,val){
                
                if(val.ImageLocation == 1 && val.path){
                    var url = 'http://10.104.64.14/fbapi/'+val.path;
                    $('#'+val.ImageId).attr('src',url);
                    $('#'+val.ImageId).on('error', function(){

                        if(val.ImageId == 'CERTFULLPAYMENT' || val.ImageId == 'CLIENTENDORSEMENT' ){
                            var url = 'http://10.104.64.14/fbapi/'+val.path;
                            $('#'+val.ImageId).attr('src',url);
                            $('#'+val.ImageId).on('error', function(){
                                $('#'+val.ImageId).attr('src',"{{ asset('app-assets/images/broken-1.png' ) }}");
                            });
                        }else {
                            $('#'+val.ImageId).attr('src',"{{ asset('app-assets/images/broken-1.png' ) }}");
                        }
                    });
                }
                
                if(!val.path && val.ImageLocation == 1 ){
                  
                    $('#'+val.ImageId).attr('src',"data:image/jpeg;base64,"+val.ImgText);
                    $('#'+val.ImageId).on('error', function(){
                      
                        $('#'+val.ImageId).attr('src',"{{ asset('app-assets/images/broken-1.png' ) }}");
                    });
                }

            })
        }

        function clearImages(){
            $('img.cif_images').each(function(){
                    // $(this).lightGallery().data('lightGallery').destroy(true);
                    $(this).attr('src',"{{ asset('app-assets/images/broken-1.png' ) }}");
            })
        }

        function save_cif (){

            data = {
                    CIFNo : $('#cif_number').val(),
                    branchcode : $('#branch').val(),
                    title : $('#title').val(),
                    lname : $('#lname').val(),
                    gname : $('#gname').val(),
                    mname : $('#mname').val(),
                    nname : $('#nname').val(),
                    present_province :  $('#present_province').val(),
                    present_city : $('#present_city').val(),
                    permanent_province : $('#permanent_province').val(),
                    permanent_city : $('#permanent_city').val(),
                    present_zcode : $('#present_zcode').val(),
                    permanent_zcode :   $('#permanent_zcode').val(),
                    present_street : $('#present_street').val(),
                    permanent_street : $('#permanent_street').val(),
                    present_district : $('#present_district').val(),
                    permanent_district : $('#permanent_district').val(),
                    monthly_salary :   $('#monthly_salary').val(),
                    monthly_members : $('#monthly_members').val(),
                    monthly_business :  $('#monthly_business').val(),
                    monthly_remittance :  $('#monthly_remittance').val(),
                    monthly_pension :   $('#monthly_pension').val(),
                    monthly_other : $('#monthly_other').val(),
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url : "{{ route('save_cif')}}",
                type : "POST",
                data : data,
                success: function(data){
                    console.log(data);
                    if (data.status === 'success'){
                        toastr.success('CIF Application successfully updated!');
                    }else if(data.status === 'error'){
                        toastr.error('Opps! Error occured!');
                    }
                }
            })



        }

        function enabledFields() {
                $('#btnSave').prop('disabled',false)
                $('#title').prop('disabled',false)
                $('#lname').prop('readonly',false)
                $('#gname').prop('readonly',false)
                $('#mname').prop('readonly',false)
                $('#nname').prop('readonly',false)
                $('#present_district').prop('disabled',false)
                $('#permanent_district').prop('disabled',false)
                $('#present_street').prop('disabled',false)
                $('#permanent_street').prop('disabled',false)
                $('#present_province').prop('disabled',false)
                $('#present_city').prop('disabled',false)
                $('#permanent_province').prop('disabled',false)
                $('#permanent_city').prop('disabled',false)
                $('#present_stay').prop('disabled',false)
                $('#present_zcode').prop('disabled',false)
                $('#permanent_stay').prop('disabled',false)
                $('#permanent_zcode').prop('disabled',false)
                $('#monthly_salary').prop('readonly',false)
                $('#monthly_members').prop('readonly',false)
                $('#monthly_business').prop('readonly',false)
                $('#monthly_remittance').prop('readonly',false)
                $('#monthly_pension').prop('readonly',false)
                $('#monthly_other').prop('readonly',false)
        }

        
        function disableFields() {
                $('#title').prop('disabled',true)
                $('#lname').prop('readonly',true)
                $('#gname').prop('readonly',true)
                $('#mname').prop('readonly',true)
                $('#nname').prop('readonly',true)
                $('#present_street').prop('disabled',true)
                $('#permanent_street').prop('disabled',true)
                $('#present_province').prop('disabled',true)
                $('#present_city').prop('disabled',true)
                $('#present_district').prop('disabled',true)
                $('#permanent_district').prop('disabled',true)
                $('#permanent_province').prop('disabled',true)
                $('#permanent_city').prop('disabled',true)
                $('#present_stay').prop('disabled',true)
                $('#present_zcode').prop('disabled',true)
                $('#permanent_stay').prop('disabled',true)
                $('#permanent_zcode').prop('disabled',true)
                $('#monthly_salary').prop('readonly',true)
                $('#monthly_members').prop('readonly',true)
                $('#monthly_business').prop('readonly',true)
                $('#monthly_remittance').prop('readonly',true)
                $('#monthly_pension').prop('readonly',true)
                $('#monthly_other').prop('readonly',true)
        }
    </script>
    	
    <script src="{{ asset('input/js/custom-file-input.js') }}"></script>

@endsection



