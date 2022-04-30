@extends('theme')
@push('cssAddCategorie')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
#delete_icon {
    position: absolute;

    right: 10px;

    cursor: pointer;

    background: transparent;
}

#description {
    background-color: #ECEFF1;
    border: 1px solid #ccc;
    resize: none;
    margin-bottom: 0;
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

.files input[type='file'] {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 120px 0px 85px 8%;
    text-align: center !important;
    margin: 0;

}

.files input[type='file']:focus {
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
    margin-bottom: 10px;
}

#preview_image {
    width: 340px;
    height: 207px;
    margin-bottom: 10px;
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
                <form action="{{url('/categories/submit')}}" name="addCategorie" method="post" id="addCategorie"
                    enctype="multipart/form-data">

                    @csrf
                    <!-- {{ csrf_field() }} -->

                </form>
                <fieldset class=" show">
                    <div class="form-card">

                        <div class="row px-1 radio-group">

                            <div class="form-group files">
                                <h5 class="sub-heading">Entrer une image</h5>
                                <input form="addCategorie" type="file" id="inputFile" class="form-control " name="icon">
                                <div id="preview_image">
                                    <img id="image" src="#" alt="your image" />
                                    <i style="font-size:24px" class="fa fa-trash" id="delete_icon"></i>
                                </div>
                                <div class="form-group"> <label class="form-control-label"> Nom * :</label> <input
                                        form="addCategorie" type="text" id="nom" name="name" placeholder=""
                                        class="form-control" onblur="validate1(1)"> </div>
                                <div class="form-group"> <label class="form-control-label">Description * :</label>
                                    <textarea rows="2" cols="50" id="description" name="description" form="addCategorie"
                                        onblur="validate1(2)"> </textarea>
                                </div>


                            </div>
                        </div> <button type="button" form="addCategorie" id="submitBtn"
                            class="btn-block btn-primary mt-3 mb-1 next">Ajouter<span
                                class="fa fa-long-arrow-right"></span></button>
                    </div>
                </fieldset>

            </div>
        </div>
    </div>
</div>
@endsection
@push('AddCategorieScript')
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






$(document).ready(function() {
    var v0 = document.getElementById("inputFile");
    var current_fs, next_fs, previous_fs;
    $("#inputFile").css({
        'display': 'block',
    })
    $("#preview_image").css({
        'display': 'none',

    })


    $('.radio-group .radio').click(function() {
        $(this).toggleClass('selected');
    });

});
// preview image
document.getElementById('delete_icon').addEventListener('click', function() {
    //alert('hi');
    //document.getElementById('addCategorie').reset();

    $("#inputFile").css({
        'display': 'block',
    })
    $("#preview_image").css({
        'display': 'none',

    })
})
$('#submitBtn').click(function() {
    if (document.getElementById('nom').value != "" && document.getElementById('description').value != "" &&
        document
        .getElementById('inputFile').value) {
        document.getElementById('addCategorie').submit();
    }
    //alert('dds');
})
</script>

@endpush