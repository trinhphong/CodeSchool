@extends('client.master.master')

@section('content')
    <script type="text/javascript">
        function updateIframe(){
            var myFrame = $("#myframe").contents().find('body');
            var textareaValue = $("textarea").val();
            myFrame.html(textareaValue);
        }
    </script>

    <textarea rows="5" cols="50" placeholder="Type HTML or text here..."></textarea>
    <button type="button" onclick="updateIframe()">Insert Content</button>
    <iframe id="myframe"></iframe>
@endsection