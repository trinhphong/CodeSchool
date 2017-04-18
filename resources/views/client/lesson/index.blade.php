@extends('client.master.master')

@section('tittle')
    test tittle
    @endsection

@section('content')
    <div class="row" style="height: 100%">
        <div class="col-sm-5 col-xs-6" style="padding: 0px; height: 100%">
            <div class="panel panel-primary" style="height: 100%; margin: 0">
                <h4 class="panel-title" style="padding-top: 20px">
                    Panel Tittle
                </h4>
                <div class="panel-body">
                    <div class="panel-content">
                        <p>Mo Ta Bai Hoc O Day</p>
                    </div>
                    <div class="panel-group">
                        <h3 class="inline-group">
                            Task x/x
                        </h3>
                        <div class="inline-group">
                            <input type="button" value="<">
                            <input type="button" value=">">
                        </div>
                        <div class="inline-group">
                            <p>list of Task show here</p>
                        </div>
                    </div>

                    <ol class="list-group">
                        <li></li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="col-sm-7 col-xs-6" style="padding: 0px; height: 100%">
            <div style="height:50%">
                <form id="editor-form" style="height: 100%; background-color: black">
                    <textarea id="editor"></textarea>
                    <button class="btn btn-success btn-sm pull-right" type="submit" style="margin-right: 20px; margin-top: 5px">
                        Submit
                    </button>
                </form>
            </div>

            <div style="height: 50%">
                <iframe id="result-content" style="height: 99%;width: 100%"></iframe>
            </div>
        </div>
    </div>
    <script>

        var editor = CodeMirror.fromTextArea(document.getElementById("editor"), {
            mode: "text/html",
            tabMode: "indent",
            theme: "dracula",
            lineNumbers: true
        });
    </script>
    @endsection