@extends('template')

@section('title', 'UDOO IoT Cloud Service')

@section('content')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>UDOO IoT CLOUD CLIENT</h2>
                </div>
                <div class="body">
                    <p>Please wait, UDOO IoT Cloud Client is starting...</p>

                    <div class="iotservice-preloader text-center">
                        <div class="preloader pl-size-xl">
                            <div class="spinner-layer pl-pink">
                                <div class="circle-clipper left">
                                    <div class="circle"></div>
                                </div>
                                <div class="circle-clipper right">
                                    <div class="circle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="/js/iot-service.js"></script>
@endsection
