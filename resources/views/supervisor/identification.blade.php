@extends('supervisor.layouts.app')

@section('header-title')
    <h6 class="text-white text-uppercase">Supervisor Dashboard</h6>
@endsection

@section('sidebar')

<nav class="col-md-2 d-none d-md-block bg-light sidebar">
  <div class="sidebar-sticky">

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Reports</span>
        <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
        </a>
    </h6>

    <ul class="nav flex-column mb-2">
      <li class="nav-item">
            <a class="nav-link active" href="{{ route('supervisor.home')}}">
          <span data-feather="home"></span>
            Identifications <span class="sr-only">(current)</span>
        </a>
      </li>

      <li class="nav-item">
            <a class="nav-link" href="{{ route('supervisor.contracts')}}">
             <span data-feather="bar-chart-2"></span>
             Contracts
           </a>
         </li>

    </ul>



    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>Manage Accounts</span>
      <a class="d-flex align-items-center text-muted" href="#">
        <span data-feather="plus-circle"></span>
      </a>
    </h6>
    <ul class="nav flex-column mb-2">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('agents')}}">
          <span data-feather="layers"></span>
          View Agents
        </a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="{{route('create.agent')}}">
          <span data-feather="plus-square"></span>
          Create Agent
        </a>
      </li>

    </ul>
  </div>
</nav>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
                @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif


            <div class="card">
                <div class="card-header">
                    Touch Point Identifications

                    <a class="btn btn-primary btn-sm float-right" href="/identification/download/{{$identification->id}}">Download</a>
                </div>
                <div class="card-body">


                    <table class="table table-sm">
                            <tbody>
                                <tr>
                                    <td>1.	Name of Sale Agent: </td>
                                    <td>  {{ $identification->salesagent_name}}</td>
                                    <td>Zone: </td>
                                    <td>  {{ $identification->salesagent_zone}}</td>
                                    <td>Telephone: </td>
                                    <td>  {{ $identification->salesagent_phone}}</td>
                                </tr>

                                <tr>
                                    <td>2.	Name of the Point of Sales:  </td>
                                    <td>   {{ $identification->pos_name}}</td>

                                </tr>

                                <tr>
                                    <td>3.	Address of the Point of sales:  </td>
                                    <td>   {{ $identification->pos_address}}</td>
                                </tr>

                                <tr>
                                    <td>4.	NAME and first name (s) of the Owner  </td>
                                    <td>   {{ $identification->owner_name}}</td>
                                </tr>

                                <tr>
                                    <td>5.	Owner's Phone Number </td>
                                    <td>   {{ $identification->owner_phone}}</td>
                                </tr>
                                <tr>
                                        <td> 6.	Business Permit number </td>
                                        <td>   {{ $identification->businesspermit_number}}</td>
                                </tr>

                                <tr>
                                    <td>7.	Kenya Revenue Authority Pin </td>
                                    <td>   {{ $identification->kra_pin}}</td>
                                </tr>
                                <tr>
                                    <td colspan="2">8.	Name and Surname of Supervisor </td>
                                    <td>   {{ $identification->supervisor_name}}</td>
                                </tr>
                                <tr>
                                    <td colspan="2">9.	Telephone number of Supervisor:  </td>
                                    <td>   {{ $identification->supervisor_phone}}</td>
                                    <td colspan="2">Number CNI Supervisor   </td>
                                    <td>   {{ $identification->number_cni_supervisor}}</td>
                                </tr>
                                <tr>
                                    <td colspan="2">10.	Name and Surname of Cashier 1:  </td>
                                    <td>   {{ $identification->cashier1_name}}</td>
                                </tr>
                                <tr>
                                    <td colspan="2">11.	Cashier 1 Telephone Number  </td>
                                    <td>   {{ $identification->cashier1_phone}}</td>
                                    <td colspan="2">CNI Cashier Number 1    </td>
                                    <td>   {{ $identification->cni_cashier1}}</td>
                                </tr>
                                <tr>
                                        <td colspan="2">12.	Name and Surname of Cashier 2:  </td>
                                        <td>   {{ $identification->cashier2_name}}</td>
                                    </tr>
                                <tr>
                                        <td colspan="2">13.	Cashier 2 Telephone Number  </td>
                                        <td>   {{ $identification->cashier2_phone}}</td>
                                        <td colspan="2">CNI Cashier Number 2    </td>
                                        <td>   {{ $identification->cni_cashier1}}</td>
                                </tr>
                                <tr>
                                        <td colspan="2">14.	Name and Surname of Cashier 3:  </td>
                                        <td>   {{ $identification->cashier3_name}}</td>
                                </tr>
                                <tr>
                                        <th colspan="2">15. Device Information  </th>
                                </tr>

                                <tr>
                                        <td>IMEI: </td>
                                        <td>   {{ $identification->device_imei}}</td>
                                        <td colspan="2">Serial Number:  </td>
                                        <td>   {{ $identification->device_serial_no}}</td>
                                </tr>

                                <tr>
                                        <td colspan="2">16.	Surface of the room:   </td>
                                        <td>   {{ $identification->surface_room}}</td>
                                </tr>
                                <tr>
                                        <td colspan="2">17.	Type of products sold: </td>
                                        <td>   {{ $identification->products_type}}</td>
                                </tr>
                                <tr>
                                        <td colspan="2">18.	Core business:</td>
                                        <td>   {{ $identification->core_business}}</td>
                                </tr>
                                <tr>
                                        <td colspan="2">19.	Secondary Activity (s): </td>
                                        <td>   {{ $identification->secondary_activity}}</td>
                                </tr>
                                <tr>
                                        <td colspan="2">20.	Number of employees:  </td>
                                        <td>   {{ $identification->employees_no}}</td>
                                </tr>

                                <tr>
                                        <td colspan="2">21.	Waiting room:   </td>
                                        <td>   {{ $identification->waiting_room == 1 ? 'YES': 'NO'}}</td>
                                </tr>
                                <tr>
                                        <td colspan="2">22.	Computer equipment available on site </td>
                                        <td>   {{ $identification->computer_available == 1 ? 'YES': 'NO'}}</td>
                                </tr>

                                <tr>
                                        <td colspan="2">23.	InTouch Products / Services you want to market:   </td>
                                        <td>   {{ $identification->services_to_market}}</td>
                                </tr>
                                <tr>
                                        <th colspan="2">Touch Pad Payment</th>

                                </tr>

                                <tr>
                                        <td>24.	Phone Number</td>
                                        <td>   {{ $identification->payment_phone_number}}</td>
                                </tr>
                                <tr>
                                        <td>25.Amount</td>
                                        <td>   {{ $identification->payment_amount}}</td>
                                </tr>
                                <tr>
                                        <td>26.	Buy Goods Reference Number</td>
                                        <td>  {{ $identification->payment_goods_refno}}</td>
                                </tr>
                                <tr>
                                        <th colspan="2"> Typology of the point </th>

                                </tr>
                                <tr>
                                <td colspan="2"> {{ $identification->topology_of_point}}</td>

                                </tr>
                                <tr>
                                        <th colspan="2"> Attachments: </th>

                                </tr>
                                <tr>
                                    <td>
                                        <img src="/images/{{ $identification->front_image_url}}" height="200px"/>
                                    </td>
                                    <td>
                                            <img src="/images/{{ $identification->back_image_url}}" height="200px"/>
                                    </td>
                                </tr>
                            </tbody>
                    </table>
                </div>

                <div class="float-right">
                        <img src="/images/logo.jpg" height="70px">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
