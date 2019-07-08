<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Touch</title>
</head>
<body>
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-10">


            <div class="">
                    <img src="{{ public_path('/images/logo.jpg')}}" height="70px">
            </div>

            <div class="card">
                <div class="card-header">
                    Touch Point Identification
                </div>
                <div class="card-body">


                    <table class="table table-sm" style="margin-top:20px;">
                            <tbody>
                                <tr>
                                    <td>1.	Name of Sale Agent: </td>
                                    <td>  {{ $identification->salesagent_name}}</td>

                                </tr>

                                <tr>
                                    <td>   Zone:  </td>
                                    <td>{{ $identification->salesagent_zone}}  </td>
                                </tr>
                                <tr>
                                    <td>   Telephone:  </td>
                                    <td> {{ $identification->salesagent_phone}}</td>
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
                                    <td>8.	Name and Surname of Supervisor </td>
                                    <td>   {{ $identification->supervisor_name}}</td>
                                </tr>
                                <tr>
                                    <td>9.	Telephone number of Supervisor:  </td>
                                    <td>   {{ $identification->supervisor_phone}}</td>

                                </tr>

                                <tr>
                                    <td>Number CNI Supervisor   </td>
                                    <td>   {{ $identification->number_cni_supervisor}}</td>
                                </tr>
                                <tr>
                                    <td>10.	Name and Surname of Cashier 1:  </td>
                                    <td>   {{ $identification->cashier1_name}}</td>
                                </tr>
                                <tr>
                                    <td>11.	Cashier 1 Telephone Number  </td>
                                    <td>   {{ $identification->cashier1_phone}}</td>
                                </tr>

                                <tr>
                                    <td>CNI Cashier Number 1    </td>
                                    <td>   {{ $identification->cni_cashier1}}</td>
                                </tr>
                                <tr>
                                        <td>12.	Name and Surname of Cashier 2:  </td>
                                        <td>   {{ $identification->cashier2_name}}</td>
                                    </tr>
                                <tr>
                                        <td>13.	Cashier 2 Telephone Number  </td>
                                        <td>   {{ $identification->cashier2_phone}}</td>
                                    </tr>

                                    <tr>
                                        <td>CNI Cashier Number 2    </td>
                                        <td>   {{ $identification->cni_cashier1}}</td>
                                </tr>
                                <tr>
                                        <td>14.	Name and Surname of Cashier 3:  </td>
                                        <td>   {{ $identification->cashier3_name}}</td>
                                </tr>
                                <tr>
                                        <th>15. Device Information  </th>
                                </tr>

                                <tr>
                                        <td>IMEI: {{ $identification->device_imei}}</td>

                                        <td>Serial Number:
                                             {{ $identification->device_serial_no}} </td>

                                </tr>

                                <tr>
                                        <td>16.	Surface of the room:   </td>
                                        <td>   {{ $identification->surface_room}}</td>
                                </tr>
                                <tr>
                                        <td>17.	Type of products sold: </td>
                                        <td>   {{ $identification->products_type}}</td>
                                </tr>
                                <tr>
                                        <td>18.	Core business:</td>
                                        <td>   {{ $identification->core_business}}</td>
                                </tr>
                                <tr>
                                        <td>19.	Secondary Activity (s): </td>
                                        <td>   {{ $identification->secondary_activity}}</td>
                                </tr>
                                <tr>
                                        <td>20.	Number of employees:  </td>
                                        <td>   {{ $identification->employees_no}}</td>
                                </tr>

                                <tr>
                                        <td>21.	Waiting room:   </td>
                                        <td>   {{ $identification->waiting_room == 1 ? 'YES': 'NO'}}</td>
                                </tr>
                                <tr>
                                        <td>22.	Computer equipment available on site </td>
                                        <td>   {{ $identification->computer_available == 1 ? 'YES': 'NO'}}</td>
                                </tr>

                                <tr>
                                    <td colspan="3">23.	InTouch Products / Services you want to market:   </td>

                                </tr>
                                <tr>
                                    <td colspan="3"> {{ $identification->services_to_market}}</td>
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
                                        <img src="{{ public_path('/images/'.$identification->front_image_url)}}" height="200px"/>
                                    </td>
                                    <td>
                                       <img src="{{ public_path('/images/'.$identification->back_image_url)}}"  height="200px"/>
                                    </td>
                                </tr>
                            </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
