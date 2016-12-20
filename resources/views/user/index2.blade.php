@extends('layouts.app')
@section('content')

<link rel="stylesheet" type="text/css" href="js/datatables.min.css"/>
<script type="text/javascript" src="js/datatables.min.js"></script>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
                <table class="table table-bordered" id="users-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                </table>
            
            
        </div>
    </div>    
</div>

{!!Html::script('js/script_user.js')!!}
@endsection

