@extends('layout.layout')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/dashboardStyle.css') }}" >
<h2 style="text-align: center;">Employees Status</h2>
<div class="container">
<div class="UpdateSec">
    <form action="{{route('comment.create')}}" method="post">
        @csrf
  <div name="Employees" class="box">
    <p><b>Select Employee</b></p>

    <input type="text" name="employeeName" id="searchEmp" onfocus="showList()" onkeyup="filterList()" placeholder="Search..." onblur="delayedHideList()">
    <ul id="list1">
        <li onmousedown="selectItem(this)">Employee 1</li>
        <li onmousedown="selectItem(this)">Employee 2</li>
        <li onmousedown="selectItem(this)">Employee 3</li>
        <li onmousedown="selectItem(this)">Employee 4</li>
        <li onmousedown="selectItem(this)">Employee 5</li>
    </ul>
  </div>

  <div name="Projects" class="box">
    <p><b>Select Project</b></p>
    <input type="text" name="projectName" id="searchPro" onfocus="showList2()" onkeyup="filterList2()" placeholder="Search..." onblur="delayedHideList2()">
    <ul id="list2">
        <li onmousedown="selectItem2(this)">Project 1</li>
        <li onmousedown="selectItem2(this)">Project 2</li>
        <li onmousedown="selectItem2(this)">Project 3</li>
        <li onmousedown="selectItem2(this)">Project 4</li>
        <li onmousedown="selectItem2(this)">Project 5</li>
    </ul>
  </div>
  
  <div name="status" class="box">
    <p><b>Update Employee status  and comments</b></p>
    <textarea name="comment"></textarea>
  </div>
  <input type="submit" class="btn" value="Post">
    </form>
<!-- End of update secssion -->
</div>

<div name="NewFeed" class="NewFeed">
    @foreach ($comments as $comment)
    <div name="status" class="NewFeedIn">
        <p><b>Employee Name:{{$comment->employee_name}} &nbsp;&nbsp;&nbsp;&nbsp; Project Name: {{$comment->project_name}} &nbsp;&nbsp;&nbsp;&nbsp;  Views:{{$comment->views }} </b></p>
        <p>{{$comment->comment}}</p>

    </div>
    @endforeach
</div>


<!-- End of container -->
</div>


<script>

// Employee list script functions
function filterList() {
    var input, filter, ul, li, i, txtValue;
    input = document.getElementById('searchEmp');
    filter = input.value.toUpperCase();
    ul = document.getElementById("list1");
    li = ul.getElementsByTagName('li');
    for (i = 0; i < li.length; i++) {
        txtValue = li[i].textContent || li[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

function showList() {
    document.getElementById("list1").style.display = "block";
}

function hideList() {
    document.getElementById("list1").style.display = "none";
}

function delayedHideList() {
    setTimeout(hideList, 200);
}

function selectItem(element) {
    document.getElementById('searchEmp').value = element.innerText;
    hideList();
}

//Project list script functions
function filterList2() {
    var input, filter, ul, li, i, txtValue;
    input = document.getElementById('searchPro');
    filter = input.value.toUpperCase();
    ul = document.getElementById("list2");
    li = ul.getElementsByTagName('li');
    for (i = 0; i < li.length; i++) {
        txtValue = li[i].textContent || li[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

function showList2() {
    document.getElementById("list2").style.display = "block";
}

function hideList2() {
    document.getElementById("list2").style.display = "none";
}

function delayedHideList2() {
    setTimeout(hideList2, 200);
}

function selectItem2(element) {
    document.getElementById('searchPro').value = element.innerText;
    hideList2();
}

</script>
@endsection





