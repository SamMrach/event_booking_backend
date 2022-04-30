@extends('theme')
@push('cssAddEvent')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
#next1 {
    width: 340px;
}

#delete_icon {
    position: absolute;
    top: 10px;
    right: 10px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
    cursor: pointer;

    font-size: 24px;
    background: transparent;
}



#description {
    background-color: #ECEFF1;
    border: 1px solid #ccc;
    resize: none;
}

.info-card {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}

.info-card .form-group {
    margin: 0;
}

.card {
    background-color: #FFF;
    border-radius: 25px;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    padding: 40px;
    z-index: 0
}

.heading {
    font-weight: normal
}

.desc {
    font-size: 14px
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey;
    padding-left: 0px
}

#progressbar .active {
    color: #673AB7
}

#progressbar li {
    list-style-type: none;
    font-size: 15px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400
}

#progressbar .step0:before {
    content: ""
}

#progressbar li:before {
    width: 40px;
    height: 40px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    background: #E0E0E0;
    border-radius: 50%;
    margin: auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 10px;
    background: #E0E0E0;
    position: absolute;
    left: 0;
    top: 17px;
    z-index: -1
}

#progressbar li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px
}

#progressbar li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #F9A825
}

.sub-heading {
    font-weight: 500
}

.yellow-text {
    color: #F9A825
}

fieldset.show {
    display: block
}

fieldset {
    display: none
}

.radio {
    display: inline-block;
    border-radius: 0;
    box-sizing: border-box;
    cursor: pointer;
    color: #BDBDBD;
    font-weight: 500;
    -webkit-filter: grayscale(100%);
    -moz-filter: grayscale(100%);
    -o-filter: grayscale(100%);
    -ms-filter: grayscale(100%);
    filter: grayscale(100%)
}

.radio:hover {
    box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
}

.radio.selected {
    border: 1px solid #F9A825;
    box-shadow: 0px 8px 16px 0px #EEEEEE;
    color: #29B6F6 !important;
    -webkit-filter: grayscale(0%);
    -moz-filter: grayscale(0%);
    -o-filter: grayscale(0%);
    -ms-filter: grayscale(0%);
    filter: grayscale(0%)
}

.card-block {
    border: 1px solid #CFD8DC;
    width: 45%;
    margin: 2.5%;
    padding: 20px 25px 15px 25px
}

@media screen and (max-width: 768px) {
    .card-block {
        padding: 20px 20px 0px 20px;
        height: 250px
    }
}

.icon {
    width: 85px;
    height: 100px
}

.image-icon {
    width: 85px;
    height: 100px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 20px
}

select,
input,
textarea {
    padding: 8px 15px 8px 15px;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: #2C3E50;
    background-color: #ECEFF1;
    border: 1px solid #ccc;
    font-size: 16px;
    letter-spacing: 1px
}

select:focus,
input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid skyblue !important;
    outline-width: 0
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

textarea {
    height: 100px
}



.fit-image {
    width: 100%;
    object-fit: cover
}

.btn-block {
    border-radius: 5px;
    height: 50px;
    font-weight: 500;
    cursor: pointer
}

.fa-long-arrow-right {
    float: right;
    margin-top: 4px
}

.fa-long-arrow-left {
    float: left;
    margin-top: 4px
}

.row {}

< !-- -->.files {
    padding: 0 0 0 10px;
}

.files input {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 120px 0px 85px 8%;
    text-align: center !important;
    margin: 0;

}

.files input:focus {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    border: 1px solid #92b0b3;
}

.files {
    position: relative;
    width: 340px;
    padding: 0 10px;
}

.files:after {
    pointer-events: none;
    position: absolute;
    top: 60px;
    left: 0;
    width: 50px;
    right: 0;
    height: 56px;
    content: "";
    background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
    display: block;
    margin: 0 auto;
    background-size: 100%;
    background-repeat: no-repeat;
}

.color input {
    background-color: #f1f1f1;
}

#inputFile {
    width: 340px;
}

#preview_image {
    width: 340px;
    height: 207px;
    display: none;
}

#image {
    width: 340px;
    height: 207px;
}
</style>
@endpush
@section('main-content')
<div class="container-fluid px-1  mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-7">
            <div class="card b-0">
                <form action="{{url('/events/submit')}}" name="addEvent" method="post" id="addEvent"
                    enctype="multipart/form-data">
                    <input type="hidden" name="category" value="cat2" />
                    <input type="hidden" name="status" value="active" />
                    @csrf
                    <!-- {{ csrf_field() }} -->

                </form>
                <fieldset class=" show">
                    <div class="form-card">
                        <h5 class="sub-heading">Entrer une image</h5>
                        <div class="row px-1 radio-group">

                            <div class="form-group files">
                                <input form="addEvent" type="file" id="inputFile" class="form-control " name="image">
                                <div id="preview_image">
                                    <img id="image" src="#" alt="your image" />
                                    <i class="fa fa-trash" id="delete_icon"></i>
                                </div>

                            </div>
                        </div> <button id="next1" class="btn-block btn-primary mt-3 mb-1 next">NEXT<span
                                class="fa fa-long-arrow-right"></span></button>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="form-card info-card">
                        <h5 class="sub-heading mb-4">Information </h5> <label class="text-danger mb-3">*
                            Required</label>
                        <div class="form-group"> <label class="form-control-label"> Nom * :</label> <input
                                form="addEvent" type="text" id="nom" name="name" placeholder="" class="form-control"
                                onblur="validate1(1)"> </div>
                        <div class="form-group"> <label class="form-control-label">Description * :</label> <textarea
                                rows="2" cols="50" id="description" name="description" form="addEvent"
                                onblur="validate1(2)"> </textarea>
                        </div>
                        <div class="form-group"> <label class="form-control-label">Seats * :</label> <input
                                form="addEvent" type="number" id="seats" name="Number of seats" placeholder=""
                                class="form-control" onblur="validate1(3)"> </div>
                        <div class="form-group"> <label class="form-control-label">Prix * :</label> <input
                                form="addEvent" type="number" id="prix" name="price" placeholder="" class="form-control"
                                onblur="validate1(4)"> </div>
                        <button id="next2" class="btn-block btn-primary mt-3 mb-1 next mt-4"
                            onclick="validate1(0)">NEXT<span class="fa fa-long-arrow-right"></span></button> <button
                            class="btn-block btn-secondary mt-3 mb-1 prev"><span
                                class="fa fa-long-arrow-left"></span>PREVIOUS</button>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="form-card">
                        <h5 class="sub-heading mb-4">Localisation et catégorie</h5> <label class="text-danger mb-3">*
                            Required</label>
                        <div class="form-group"> <label class="form-control-label">Adress * :</label> <input
                                form="addEvent" type="text" id="adress" name="localisation" placeholder=""
                                class="form-control" onblur="validate2(1)">
                        </div>
                        <div class="form-group"> <label class="form-control-label">Date * :</label> <input
                                form="addEvent" type="date" id="date" name="date" placeholder="" class="form-control"
                                onblur="validate2(4)"> </div>

                        <div class="select mb-3"> <select id="selectForm" form="addEvent" name="category"
                                class="form-control">
                                @foreach($categories as $categorie)
                                <option value="{{$categorie->name}}">{{$categorie->name}}</option>
                                @endforeach
                            </select> </div>
                    </div> <button type="button" id="submitBtn" form="addEvent"
                        class="btn-block btn-primary mt-3 mb-1 next mt-4">Publier<span
                            class="fa fa-long-arrow-right"></span></button> <button
                        class="btn-block btn-secondary mt-3 mb-1 lastprev"><span
                            class="fa fa-long-arrow-left"></span>PREVIOUS</button>
            </div>
            </fieldset>

        </div>
    </div>
</div>
</div>
@endsection
@push('AddEventScript')
<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#image').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
        $("#inputFile").css({
            'display': 'none',
        })
        $("#preview_image").css({
            'display': 'block',

        })

    }
}
var inputFile = document.getElementById('inputFile');
console.log(inputFile);
inputFile.onchange = function() {
    readURL(this);
};


function validate1(val) {

    v1 = document.getElementById("nom");
    v2 = document.getElementById("description");
    v3 = document.getElementById("seats");
    v4 = document.getElementById("prix");

    flag1 = true;
    flag2 = true;
    flag3 = true;
    flag4 = true;

    if (val >= 1 || val == 0) {
        if (v1.value == "") {
            v1.style.borderColor = "red";
            flag1 = false;
        } else {
            v1.style.borderColor = "green";
            flag1 = true;
        }
    }

    if (val >= 2 || val == 0) {
        if (v2.value == "") {
            v2.style.borderColor = "red";
            flag2 = false;
        } else {
            v2.style.borderColor = "green";
            flag2 = true;
        }
    }

    if (val >= 3 || val == 0) {
        if (v3.value == "" || v3.value < 0) {
            v3.style.borderColor = "red";
            flag3 = false;
        } else {
            v3.style.borderColor = "green";
            flag3 = true;
        }
    }

    if (val >= 4 || val == 0) {
        if (v4.value == "" || v4.value < 0) {
            v4.style.borderColor = "red";
            flag4 = false;
        } else {
            v4.style.borderColor = "green";
            flag4 = true;
        }
    }

    flag = flag1 && flag2 && flag3 && flag4;

    return flag;
}

function validate2(val) {
    v1 = document.getElementById("adress");
    v4 = document.getElementById("date");

    flag1 = true;
    flag2 = true;
    flag3 = true;
    flag4 = true;

    if (val >= 1 || val == 0) {
        if (v1.value == "") {
            v1.style.borderColor = "red";
            flag1 = false;
        } else {
            v1.style.borderColor = "green";
            flag1 = true;
        }
    }



    if (val >= 4 || val == 0) {
        if (v4.value == "") {
            v4.style.borderColor = "red";
            flag4 = false;
        } else {
            v4.style.borderColor = "green";
            flag4 = true;
        }
    }

    flag = flag1 && flag4;

    return flag;
}

$(document).ready(function() {
    var v0 = document.getElementById("inputFile");
    var current_fs, next_fs, previous_fs;

    $(".next").click(function() {

        str1 = "next1";
        str2 = "next2";
        str3 = "next3";

        if (!str2.localeCompare($(this).attr('id')) && validate1(0) == true) {
            val2 = true;
        } else {
            val2 = false;
        }

        if (!str3.localeCompare($(this).attr('id')) && validate2(0) == true && validate2(4) == true) {
            val3 = true;
        } else {
            val3 = false;
        }

        if (v0.value != 0 && (!str1.localeCompare($(this).attr('id')) || (!str2.localeCompare($(this)
                    .attr('id')) &&
                val2 == true) || (!str3.localeCompare($(this).attr('id')) && val3 == true))) {
            current_fs = $(this).parent().parent();
            next_fs = $(this).parent().parent().next();

            $(current_fs).removeClass("show");
            $(next_fs).addClass("show");



            current_fs.animate({}, {
                step: function() {

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });

                    next_fs.css({
                        'display': 'block'
                    });
                }
            });
        }

    });

    $(".prev").click(function() {
        current_fs = $(this).parent().parent();
        previous_fs = $(this).parent().parent().prev();
        console.log(current_fs);
        console.log(previous_fs);
        $(current_fs).removeClass("show");
        $(previous_fs).addClass("show");

        current_fs.animate({}, {
            step: function() {

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });

                previous_fs.css({
                    'display': 'block'
                });
            }
        });
    });
    $(".lastprev").click(function() {
        document.getElementsByClassName('form-card')[2].parentNode.classList.remove('show');
        document.getElementsByClassName('form-card')[2].parentNode.previousElementSibling.classList.add(
            'show');
    })
    $('.radio-group .radio').click(function() {
        $(this).toggleClass('selected');
    });

});
// preview image
document.getElementById('delete_icon').addEventListener('click', function() {
    document.getElementById('addEvent').reset();
    $("#inputFile").css({
        'display': 'block',
    })
    $("#preview_image").css({
        'display': 'none',

    })
})
$('#submitBtn').click(function() {
    if (document.getElementById('adress').value != "" && document.getElementById('date').value != "" && document
        .getElementById('selectForm').value) {
        document.getElementById('addEvent').submit();
    }
    //alert('dds');
})
</script>

@endpush