@extends('backend.master')
@section('content')
    <div id="divToPrint">
        <h2>USER DETAILS</h2>
        <p>
            <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/images/'.$user->image)}}" alt="user image">
        </p>
        <p>{{ $user->name }}</p>
        <p>{{ $user->email }}</p>
    </div>
    <input class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');" value="Print">
@endsection

{{-- this is used to print any page --}}
<script language="javascript">
    function PrintDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>