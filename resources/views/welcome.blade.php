@extends('layouts.app')
@section('title', 'FinanceEye - Dashboard')
@section('content')
  <div class="row">
    <div class="col-md-12">
    <div class="card mb-4">
      <div class="card-header">
      <h5 class="card-title">Monthly Recap Report</h5>
      </div>
      <div class="card-body">
      <div class="row">
        <div class="col-md-8">
        <p class="text-center">
          <strong>Sales: 1 Jan, 2023 - 30 Jul, 2023</strong>
        </p>
        <div id="sales-chart"></div>
        </div>
        <div class="col-md-4">
        <p class="text-center"><strong>Goal Completion</strong></p>
        <div class="progress-group">
          Add Products to Cart
          <span class="float-end"><b>160</b>/200</span>
          <div class="progress progress-sm">
          <div class="progress-bar text-bg-primary" style="width: 80%"></div>
          </div>
        </div>
        <div class="progress-group">
          Complete Purchase
          <span class="float-end"><b>310</b>/400</span>
          <div class="progress progress-sm">
          <div class="progress-bar text-bg-danger" style="width: 75%"></div>
          </div>
        </div>
        <div class="progress-group">
          <span class="progress-text">Visit Premium Page</span>
          <span class="float-end"><b>480</b>/800</span>
          <div class="progress progress-sm">
          <div class="progress-bar text-bg-success" style="width: 60%"></div>
          </div>
        </div>
        <div class="progress-group">
          Send Inquiries
          <span class="float-end"><b>250</b>/500</span>
          <div class="progress progress-sm">
          <div class="progress-bar text-bg-warning" style="width: 50%"></div>
          </div>
        </div>
        </div>
      </div>
      </div>
      <div class="card-footer">
      <div class="row">
        <div class="col-md-3 col-6">
        <div class="text-center border-end">
          <span class="text-success">
          <i class="bi bi-caret-up-fill"></i> 17%
          </span>
          <h5 class="fw-bold mb-0">$35,210.43</h5>
          <span class="text-uppercase">TOTAL REVENUE</span>
        </div>
        </div>
        <div class="col-md-3 col-6">
        <div class="text-center border-end">
          <span class="text-info"> <i class="bi bi-caret-left-fill"></i> 0% </span>
          <h5 class="fw-bold mb-0">$10,390.90</h5>
          <span class="text-uppercase">TOTAL COST</span>
        </div>
        </div>
        <div class="col-md-3 col-6">
        <div class="text-center border-end">
          <span class="text-success">
          <i class="bi bi-caret-up-fill"></i> 20%
          </span>
          <h5 class="fw-bold mb-0">$24,813.53</h5>
          <span class="text-uppercase">TOTAL PROFIT</span>
        </div>
        </div>
        <div class="col-md-3 col-6">
        <div class="text-center">
          <span class="text-danger">
          <i class="bi bi-caret-down-fill"></i> 18%
          </span>
          <h5 class="fw-bold mb-0">1200</h5>
          <span class="text-uppercase">GOAL COMPLETIONS</span>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
@endsection