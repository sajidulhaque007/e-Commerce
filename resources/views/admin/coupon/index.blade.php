@extends('layouts.dashboard')
@section('add_coupon')
    active
@endsection

@section('title')
    Add Coupon
@endsection
@section('breadcrumb')
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{route('home')}}">Home Page</a>
        <a class="breadcrumb-item" href=""> Add Coupon Page</a>
    </nav>
@endsection
@section('content')
<div class="container">
    <div class="row-mb-6">
        <div class="col-md-12">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <span >List Of Coupon</span>
                </div>
                @can('add coupon')
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Coupon Name</th>
                                <th>Discount Amount (%)</th>
                                <th>Valid Till</th>
                                <th>Status</th>
                                <th>Remaining Days</th>
                                {{-- @isset($coupon->updated_at) --}}
                                <th>Created At</th>
                                {{-- @else --}}
                                <th>Updated At</th>
                                {{-- @endisset --}}

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($coupons as $coupon)
                                <tr>
                                    <td>{{ $loop->index +1 }}</td>
                                    <td>{{ $coupon->coupon_name }}</td>
                                    <td>{{ $coupon->discount_amount }}%</td>
                                    <td>{{ $coupon->valid_till }}</td>
                                    <td>
                                     @if ($coupon->valid_till >=\Carbon\Carbon::now()->format('Y-m-d'))
                                     <span class="badge badge-success">Valid</span>
                                    @else
                                    <span class="badge badge-danger">Invalid</span>
                                     @endif
                                    </td>
                                    <td>
                                        @if ($coupon->valid_till >=\Carbon\Carbon::now()->format('Y-m-d'))
                                        <span class="badge badge-success">{{ \Carbon\Carbon::parse($coupon->valid_till)->diffInDays(\Carbon\Carbon::now()->format('Y-m-d')) }} days left</span>
                                       @else
                                       <span class="badge badge-danger">Expired {{ \Carbon\Carbon::parse($coupon->valid_till)->diffInDays(\Carbon\Carbon::now()->format('Y-m-d')) }} days ago</span>
                                        @endif

                                    </td>
                                    <td>{{ $coupon->created_at }}</td>
                                    @isset($coupon)
                                    <td>{{ $coupon->updated_at }}</td>
                                    @else
                                    <td>Not update</td>
                                    @endisset
                                    <td>
                                        <a href="{{ route('coupon.edit',$coupon->id) }}" class="btn btn-light btn-sm fa fa-edit"> Edit</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="50" class="text-center text-danger">No Data Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Add Coupon
                </div>
                {{-- @can('add coupon') --}}
                <div class="card-body">
                        @if ($errors->all())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                        @endif
                    <form method="post" action="{{ route('coupon.store') }}">
                      @csrf
                        <div class="form-group">
                          <label>Coupon Name</label>
                          <input type="text" class="form-control" name="coupon_name" value="{{ old('coupon_name') }}">
                        </div>
                        <div class="form-group">
                          <label>Discount Amount (%)</label>
                          <input type="text" class="form-control" name="discount_amount" value="{{ old('discount_amount') }}">
                        </div>
                        <div class="form-group">
                          <label>Valid Till </label>
                          <input type="date" class="form-control" name="valid_till" min="{{ \Carbon\carbon::now()->format('Y-m-d') }}">
                        </div>
                        <button type="submit" class="btn btn-success">Add </button>
                      </form>
                    </div>
                    @else
                    <span class="lead m-auto"><h1 class="badge badge-danger">UnAuthorized</h1></span>
                    @endcan
            </div>
        </div>
    </div>
</div>
@endsection
