@extends('layouts.admin')

@section('content-header', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
		<!-- Log on to codeastro.com for more projects -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-purple">
              <div class="inner">
                  <h3>{{$products_count}}</h3>
                <p>Total Products</p>
              </div>
              <div class="icon">
              <i class="fas fa-dolly-flatbed"></i>
              </div>
              <a href="{{route('products.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                  <h3>{{$orders_count}}</h3>
                <p>Orders Count</p>
              </div>
              <div class="icon">
              <i class="fas fa-chart-line"></i>
              </div>
              <a href="{{route('orders.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                  <h3>{{config('settings.currency_symbol')}} {{number_format($income, 2)}}</h3>
                <p>Total Income</p>
              </div>
              <div class="icon">
              <i class="fas fa-dollar-sign"></i>
              </div>
              <a href="{{route('orders.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          
    </div>

    <div class="row"><!-- Log on to codeastro.com for more projects -->
    <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-teal">
              <div class="inner">
                <h3>{{config('settings.currency_symbol')}} {{number_format($income_today, 2)}}</h3>

                <p>Today's Income</p>
              </div>
              <div class="icon">
                <i class="fas fa-money-check-alt"></i>
              </div>
              <a href="{{route('orders.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>{{$customers_count}}</h3>

            <p>Total Customers</p>
          </div>
          <div class="icon">
          <i class="fas fa-users"></i>
          </div>
          <a href="{{ route('customers.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
</div><!-- Log on to codeastro.com for more projects -->
@endsection
