<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>InTouch</title>
</head>
<body onload="window.print()">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif


            <div class="card">
                <div class="card-header">
                    TOUCH POINT LICENSE AGREEMENT FOR THE USE OF GUICHET UNIQUE LIMITED’S
                        MULTIMODAL PLATFORM
                </div>
                <div class="card-body">


                    <table class="table table-sm">
                            <tbody>
                                <tr>
                                    <td>Name, First Name / Commercial Name: </td>
                                    <td>  {{ $contract->commercial_name}}</td>

                                </tr>

                                <tr>
                                    <td>Date and place of birth:  </td>
                                    <td>{{$contract->dob}} - {{ $contract->place_of_birth}}</td>
                                </tr>

                                <tr>
                                    <td>Corporate name:  </td>
                                    <td>{{ $contract->corporate_name}}</td>
                                </tr>

                                <tr>
                                    <td>Name and position of the Company Contact representative </td>
                                    <td>{{ $contract->name_and_position_ccr}}</td>
                                </tr>

                                <tr>
                                    <td>Type and number of ID: </td>
                                    <td>{{ $contract->type_and_number_of_id}}</td>
                                </tr>
                                <tr>
                                    <td>Street and postal address of the institution (1) or head office </td>
                                    <td>   {{ $contract->address}}</td>
                                </tr>

                                <tr>
                                    <td>Legal Name of Business / Company </td>
                                    <td>   {{ $contract->business_name}}</td>
                                </tr>
                                <tr>
                                    <td>PIN Registration number</td>
                                    <td>   {{ $contract->pin_number}}</td>
                                </tr>
                                <tr>
                                        <td>Registration Number of Business / Company:</td>
                                        <td>   {{ $contract->reg_no_of_business}}</td>
                                </tr>

                                <tr>
                                        <td>Phone number:</td>
                                        <td>   {{ $contract->phone}}</td>
                                </tr>
                                <tr>
                                        <td>Email address of Business / Company:</td>
                                        <td>   {{ $contract->email}}</td>
                                </tr>
                                <tr>
                                        <th>Date:</th>
                                        <td>   {{ $contract->date}}</td>
                                </tr>
                                <tr>
                                        <th> Name: </th>
                                        <td>   {{ $contract->name}}</td>
                                </tr>

                                <tr>
                                 <th> Signature: </th>

                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <img src="/images/{{ $contract->signature_url}}" class="img-responsive"/>
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
