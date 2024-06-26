<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inquiry Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script src="{{ asset('assets/js/plugins/jquery.validate.min.js') }}"></script>
    <style>
        .breadcrumb__section {
            background-color: #f5f5f5;
            padding: 20px 0;
            margin-bottom: 20px;
        }

        .breadcrumb__content {
            text-align: center;
        }

        .section--padding {
            padding: 40px 0;
        }

        .form-control.m-0 {
            width: 100%;
            padding: 10px;
            margin: 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            height: 32px !important;
        }

        .form-check-inline {
            display: inline-block;
        }

        .form-check-label {
            margin-right: 15px;
        }

        .table thead th,
        .table tbody td {
            text-align: center;
        }

        .container-width {
            width: 959px;
        }

        #sig-canvas {
    border: 2px dotted #CCCCCC;
    border-radius: 15px;
    cursor: crosshair;
}
    </style>
</head>

<body>
    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section">
        <div class="container">
            <div class="breadcrumb__content">
                <h4>Inquiry Form</h4>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start form section -->
    <div class="container container-width">
        <form method="post" action="{{ route('inquiries.store') }}" class="md-float-material form-material">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="name">Name:</label>
                        <div class="col-sm-10">
                            <input class="form-control m-0" id="name" name="name" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="date">Date:</label>
                        <div class="col-sm-10">
                            <input type="text" name="date" class="form-control m-0" id="datepicker">
                            {{-- <input class="form-control m-0" id="date" name="date" type="date"> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="mileage">Mileage:</label>
                        <div class="col-sm-9">
                            <input class="form-control m-0" id="mileage" name="mileage" type="text">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="vehicle">Vehicle:</label>
                        <div class="col-sm-10">
                            <input class="form-control m-0" id="vehicle" name="vehicle" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="year">Year:</label>
                        <div class="col-sm-10">
                            <input class="form-control m-0" id="year" name="year" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="lic_no">Lic No:</label>
                        <div class="col-sm-9">
                            <input class="form-control m-0" id="lic_no" name="lic_no" type="text">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label" for="address">Address:</label>
                        <div class="col-sm-11">
                            <input class="form-control m-0" id="address" name="address" type="text">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="returning">Returning:</label>
                        <div class="col-sm-9">
                            <input class="form-control m-0" id="returning" name="returning" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="color">Color:</label>
                        <div class="col-sm-9">
                            <input class="form-control m-0" id="color" name="color" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="tel_digicel">TEL Digicel:</label>
                        <div class="col-sm-8">
                            <input class="form-control m-0" id="tel_digicel" name="tel_digicel" type="text">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="email">Email:</label>
                        <div class="col-sm-10">
                            <input class="form-control m-0" id="email" name="email" type="email">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="tel_lime">TEL Lime:</label>
                        <div class="col-sm-9">
                            <input class="form-control m-0" id="tel_lime" name="tel_lime" type="text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="dob">Date of Birth:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control m-0" id="date"  name="dob">

                            {{-- <input class="form-control m-0" id="dob" name="dob" type="date"> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="chassis">Chassis:</label>
                        <div class="col-sm-9">
                            <input class="form-control m-0" id="chassis" name="chassis" type="text">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <p>Kindly complete this checklist by placing a tick in the respective boxes.<br>
                        Any discrepancies should be detailed in the section provided at the bottom of the sheet.</p>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="engine">Engine:</label>
                        <div class="col-sm-9">
                            <input class="form-control m-0" id="engine" name="engine" type="text">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <p>ITEMS TO BE CHECKED:</p>
                    <p>Start Engine check dashboard for the following indicators</p>
                    <ul>
                        <li>Fuel level</li>
                        <li>Oil level</li>
                        <li>Coolant level</li>
                        <li>Power steering oil level</li>
                        <li>Check tires for wear and pressure (20% 30% 50% 60% 80% 100% other indicate)</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Engine Light</th>
                                <th>ABS Light</th>
                                <th>Brake Light</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>E 1/4</td>
                                <td>1/2 3/4</td>
                                <td>F</td>
                            </tr>
                            <tr>
                                <td>E 1/4</td>
                                <td>1/2 3/4</td>
                                <td>F</td>
                            </tr>
                            <tr>
                                <td>E 1/4</td>
                                <td>1/2 3/4</td>
                                <td>F</td>
                            </tr>
                            <tr>
                                <td>E 1/4</td>
                                <td>1/2 3/4</td>
                                <td>F</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <span class="col-sm-6"> </span><span class="col-sm-2">Good</span><span
                        class="col-sm-2">Defective</span>
                </div>
                <div class="col-md-6">
                    <span class="col-sm-6"> </span><span class="col-sm-2">Good</span><span
                        class="col-sm-2">Defective</span>
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-6 form-group">
                    @php
                        $products1 = ['Horn', 'Carpet', 'Battery', 'Battery Clamps', 'Left Headlight', 'Right Headlight', 'Left Indicator', 'Right Front Fender', 'Left Front Fender', 'Right Front Door', 'Left Front Door', 'Left Rear Door', 'Right Rear Door', 'Left Tail Lamp', 'Right Tail Lamp', 'Hub Caps', 'Cigarette Lighter', 'Grill'];
                    @endphp
                    @foreach ($products1 as $key => $product)
                    <div class="form-group">
                        <label class="col-sm-6">{{ $product }}</label>
                        <div class="form-check form-check-inline col-sm-2">
                            <label class="form-check-label">
                                <input class="form-check-input status-checkbox" id="{{ strtolower(str_replace(' ', '_', $product)) }}_status[]" type="checkbox" name="products[{{ strtolower(str_replace(' ', '_', $product)) }}][condition]" value="good">
                            </label>
                        </div>
                        <div class="form-check form-check-inline col-sm-2">
                            <label class="form-check-label">
                                <input class="form-check-input status-checkbox" id="{{ strtolower(str_replace(' ', '_', $product)) }}_status[]" type="checkbox" name="products[{{ strtolower(str_replace(' ', '_', $product)) }}][condition]" value="defective">
                            </label>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-6 form-group">
                    @php
                        $products2 = ['Reverse Light', 'Rear Door or Trunk', 'Window Functions', 'Oil Cap', 'Left Quarter Panel', 'Right Quarter Panel', 'Front Bumper', 'Rear Bumper', 'Left Wing Mirror', 'Right Wing Mirror', 'Rims', 'Interior Lights', 'Seats', 'Door Pulls', 'Rear Windshield', 'Front Windshield', 'Spare Tire', 'Jack & Handle', 'Wipers & Washer Jets'];
                    @endphp

                    @foreach ($products2 as $key => $product)
                        <label class="col-sm-6">{{ $product }}</label>
                        <div class="form-check form-check-inline col-sm-2">
                            <label class="form-check-label">
                                <input class="form-check-input status-checkbox" type="checkbox"
                                    id="{{ strtolower(str_replace(' ', '_', $product)) }}_status[]" name="products[{{ strtolower(str_replace(' ', '_', $product)) }}][condition]" value="good">
                            </label>
                        </div>
                        <div class="form-check form-check-inline col-sm-2">
                            <label class="form-check-label">
                                <input class="form-check-input status-checkbox" type="checkbox"
                                    id="{{ strtolower(str_replace(' ', '_', $product)) }}_status[]" name="products[{{ strtolower(str_replace(' ', '_', $product)) }}][condition]" value="defective">
                            </label>
                        </div><br>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>Following discrepancies were noted: .......................................................</p>
                    <p>I hereby authorize Superior Parts Limited to effect repairs and supply necessary materials
                        relating to this job and grant your employees permission to operate the vehicle described above
                        on streets, highways, and elsewhere for testing and inspection.</p>
                    <p>50% deposit is to be made on all jobs.</p>
                    <p>Superior Parts Ltd will not be held responsible for jobs left over 30 days.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="date">Date:</label>
                        <div class="col-sm-10">
                            <input class="form-control m-0 datepicker" id="text" name="sign_date" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-8 form-group row">
                    <label class="col-sm-4 col-form-label">Customer's Signature:</label>
                    <div class="col-sm-8">
                        <canvas id="sig-canvas" width="400" height="130">
                            Get a better browser, bro.
                        </canvas>
                        <button type="button" class="btn btn-default" id="sig-clearBtn">Clear Signature</button>
                    </div>
                    <input id="sig-dataUrl" class="form-control" type="hidden" name="signature">
                </div>
                {{-- <div class="col-md-8">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="signature">Customer's Signature:</label>
                        <div class="col-sm-8">
                            <input class="form-control m-0" id="signature" name="signature" type="text">
                        </div>
                    </div>
                </div> --}}
            </div>

            <button id="sig-submitBtn" class="btn btn-primary mb-10" type="submit">Save</button>
        </form>
    </div>

    <script>
         $(function() {
            window.requestAnimFrame = (function(callback) {
                return window.requestAnimationFrame ||
                    window.webkitRequestAnimationFrame ||
                    window.mozRequestAnimationFrame ||
                    window.oRequestAnimationFrame ||
                    window.msRequestAnimaitonFrame ||
                    function(callback) {
                        window.setTimeout(callback, 1000 / 60);
                    };
            })();

            var canvas = $("#sig-canvas")[0];
            var ctx = canvas.getContext("2d");
            ctx.strokeStyle = "#222222";
            ctx.lineWidth = 4;

            var drawing = false;
            var mousePos = {
                x: 0,
                y: 0
            };
            var lastPos = mousePos;

            $(canvas).on("mousedown", function(e) {
                drawing = true;
                lastPos = getMousePos(canvas, e);
            });

            $(canvas).on("mouseup", function(e) {
                drawing = false;
            });

            $(canvas).on("mousemove", function(e) {
                mousePos = getMousePos(canvas, e);
            });

            // Add touch event support for mobile
            $(canvas).on("touchstart", function(e) {
                e.preventDefault();
                mousePos = getTouchPos(canvas, e);
                var touch = e.touches[0];
                var me = new MouseEvent("mousedown", {
                    clientX: touch.clientX,
                    clientY: touch.clientY
                });
                canvas.dispatchEvent(me);
            });

            $(canvas).on("touchmove", function(e) {
                var touch = e.touches[0];
                var me = new MouseEvent("mousemove", {
                    clientX: touch.clientX,
                    clientY: touch.clientY
                });
                canvas.dispatchEvent(me);
            });

            $(canvas).on("touchend", function(e) {
                var me = new MouseEvent("mouseup", {});
                canvas.dispatchEvent(me);
            });

            function getMousePos(canvasDom, mouseEvent) {
                var rect = canvasDom.getBoundingClientRect();
                return {
                    x: mouseEvent.clientX - rect.left,
                    y: mouseEvent.clientY - rect.top
                };
            }

            function getTouchPos(canvasDom, touchEvent) {
                var rect = canvasDom.getBoundingClientRect();
                return {
                    x: touchEvent.touches[0].clientX - rect.left,
                    y: touchEvent.touches[0].clientY - rect.top
                };
            }

            function renderCanvas() {
                if (drawing) {
                    ctx.moveTo(lastPos.x, lastPos.y);
                    ctx.lineTo(mousePos.x, mousePos.y);
                    ctx.stroke();
                    lastPos = mousePos;
                }
            }

            // Prevent scrolling when touching the canvas
            $(document.body).on("touchstart touchend touchmove", function(e) {
                if ($(e.target).is(canvas)) {
                    e.preventDefault();
                }
            });

            (function drawLoop() {
                requestAnimFrame(drawLoop);
                renderCanvas();
            })();

            function clearCanvas() {
                canvas.width = canvas.width;
            }

            // Set up the UI
            var sigText = $("#sig-dataUrl")[0];
            var sigImage = $("#sig-image")[0];
            
            var clearBtn = $("#sig-clearBtn")[0];
            var submitBtn = $("#sig-submitBtn")[0];

            $(clearBtn).on("click", function(e) {
                clearCanvas();
                sigText.value = "Data URL for your signature will go here!";
                sigImage.setAttribute("src", "");
                $(sigImage).css("display", "none");
            });

            $(submitBtn).on("click", function(e) {
                var dataUrl = canvas.toDataURL();
                sigText.value = dataUrl;
                sigImage.setAttribute("src", dataUrl);
                $(sigImage).css("display", "block");
            });
        });

        $(document).ready(function() {
            $('.status-checkbox').change(function() {
                var type = $(this).attr('id');
                $('.status-checkbox[id="' + type + '"]').not(this).prop('checked', false);
            });

            $('#datepicker').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd' 
            });
            $('#date').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd' 
            });
            $('.datepicker').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd' 
            });

            $('form').validate({
                rules: {
                    name: "required",
                    date: "required",
                },
                messages: {
                    name: "Please enter name",
                    date: "Please enter date",
                },
                errorClass: "text-danger f-12",
                errorElement: "span",
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass("form-control-danger");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass("form-control-danger");
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
    </script>
</body>

</html>
