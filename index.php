<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/poster.css" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="col-lg-8  mb-10 mb-lg-0" >
    <div class="search px-4 mb-5 p-4 col-lg-12">
        <div class="search-wrapper" 
       >



            <div class="form-group has-feedback">

                <i class="bi bi-search form-control-feedback"></i>
                <input  type="buscador" name="buscador" class="form-control form-control-lg" id="buscador" placeholder="Busca el Tema / Autor / Temática " />
            </div>
            <style>
                .form-control-feedback {
                    position: absolute;
                    padding: 10px;
                    pointer-events: none;
                    margin-top: 6px;
                }
                .form-control {
                    padding-left: 30px !important;
                }
                @media (min-width: 320px) and (max-width: 881px) {


.has-feedback{
    margin-top:50px; 
margin-left:10%; 
margin-right:10%; 
margin-bottom:auto;
}

}
            </style>
        </div>
        <br>
    </div>
</div>

<div class="col-lg-8  mb-5 mb-lg-0">
    <br><br>
    <section class="items-api">
        <div class="articuloss px-4 p-4" style="z-index: 999999999;position: relative;">
            <div id="resultado">
                <?php include_once('archivo.php'); ?>
            </div>
        </div>
    </section>
</div>

<script>
    $('#buscador').keyup(function()
        {
            var dato_a_buscar = $('#buscador').val();
            $.post('archivo.php', {
                "dato_a_buscar": dato_a_buscar
            }, function(data) {
                $('#resultado').html(data);
            });
        });
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>