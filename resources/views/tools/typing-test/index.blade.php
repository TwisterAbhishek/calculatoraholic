@extends('template')

@section('head')
    <title>Test your typing skills | {{env('APP_NAME')}}</title>
    <style>
        .text
        {
            font-size: 2rem;
            font-weight: 400 !important;
            font-family: Merriweather,serif;
            /* line-height: 4; */
            text-rendering: optimizeLegibility;
            padding-right: 8px;
            color: #4b4b4b;
        }
        .countCard
        {
            height: 90px;
            width: 90px;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        #type_indicator
        {
            font-size: 2rem;
            font-weight: 400 !important;
            font-family: Merriweather,serif;
            text-rendering: optimizeLegibility;
            border-right: 1.8px solid gray;
            height: 45px;
            animation: indicate 1s infinite;
        }
        @keyframes indicate {
            from {opacity: 1.0;}
            to {opacity: 0.0;}
        }

        .typingIndicatorBubble {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .typingIndicatorBubbleDot {
            width: 15px;
            height: 15px;
            margin-right: 4px;
            position: relative;
            bottom: -4px;
            background-color: #000;
            border-radius: 50%;
            animation-name: bounce;
            animation-duration: 1.3s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }

        .typingIndicatorBubbleDot:first-of-type {
            margin: 0px 4px;
        }

        .typingIndicatorBubbleDot:nth-of-type(2) {
            animation-delay: 0.15s;
        }

        .typingIndicatorBubbleDot:nth-of-type(3) {
            animation-delay: 0.3s;
        }

        @keyframes bounce {
            0%,
            60%,
            100% {
                transform: translateY(0);
            }
            30% {
                transform: translateY(-4px);
            }
        }
    </style>
@endsection

@section('body')

<div class="container mt-5">

    <div class="row m-0">

        <div class="col-md-12 text-center mt-5 d-flex justify-content-center">
            <h1 class="mb-4" style="font-size: 4rem;">Test your typing skills</h1>
            <div class="typingIndicatorBubble">
              <div class="typingIndicatorBubbleDot"></div>
              <div class="typingIndicatorBubbleDot"></div>
              <div class="typingIndicatorBubbleDot"></div>
            </div>
        </div>

        <div class="d-flex justify-content-center my-4 py-0">
            <div>
                <div class="countCard shadow">
                    <span id="seconds" style="font-size: 1.9rem; line-height: 30px;">60</span>
                    <div style="font-size: 0.7rem;">seconds</div>
                </div>
            </div>
        </div>

        <div class="container col-10 my-4">
            <div class="card shadow-lg p-4 border-0 rounded-4" data-bs-toggle="tooltip" title="Press [Space] to start">
                <div class="d-flex">
                    <div class="text-start ps-2 d-flex align-items-center justify-content-end" id="writtenContainer" style="width: 50%; cursor:text; position: relative; left: -7px; display: inline-flex; overflow: hidden;">
                        {{-- text written  --}}
                    </div>
                    <div style="width: 50%; cursor:text; position: relative; left: -14px; display: inline-flex; overflow: hidden;" class="data">
                        <div class="text-start" id="type_indicator"></div>
                        {{-- text pending  --}}
                        <span class="text">Lorem</span>
                        <span class="text">Ipsum</span>
                        <span class="text">Lorem</span>
                        <span class="text">Ipsum</span>
                        <span class="text">Lorem</span>
                        <span class="text">Ipsum</span>
                        <span class="text">Lorem</span>
                        <span class="text">Ipsum</span>
                        <span class="text">Lorem</span>
                        <span class="text">Ipsum</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<script>
    var called = false;
    $(document).keypress(function(event){
        if(called != true)
        {
            if (event.keyCode === 32) {
                start();
                called = true;
            }
        }
    });
    var counter = 60;
    function start()
    {
        // CounteDown 
        var interval = setInterval(function() {
            counter--;
            if (counter <= 0) {
                clearInterval(interval); 
                $('#seconds').text('0');
                return;
            }else{
                $('#seconds').text(counter);
            }
        }, 1000);

        // Insert Span 
        $('#writtenContainer').html('<span class="text"></span>');
    }
</script>


<script>
    $(document).keypress(function(event)
    {
        if (event.keyCode === 32)
        {
            onSpacePress();
        }
        keyPress();
    });

    function onSpacePress(){
        $('#writtenContainer').append('<span class="text"></span>');
    }

    function keyPress(e)
    {
        $prev = $('.data').children('span').html();
        console.log($prev);
    }
</script>
@endsection