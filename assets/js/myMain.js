$( document ).ready(function() {

// inscription de l'utilisateur
$("#formInscription").on('submit',(function(e) {
    e.preventDefault();
    data= new FormData(this);
    console.log(data)
    $.ajax({
        url: "server/back/validerInscription.php",
        type: "POST",
        data:  new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        success: function(data)
        {
            console.log(data)
            if(data=='invalid')
            {
                alert('No success')
            }
            else
            {
            document.location.href="index.php";
            }
        },
        error: function(e) 
        {
            alert('error')
        }          
        });
    }));
// Fin! inscription de l'utilisateur;



// filter
$("#form_filter").on('submit',(function(e) {
    e.preventDefault();
    data= new FormData(this);
    $.ajax({
        url: "server/back/filter.php",
        type: "POST",
        data:  new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        success: function(data)
        {
            console.log(data)
            if(data=='invalid')
            {
                alert('No success')
            }
            else
            {
            }
        },
        error: function(e) 
        {
            alert('error')
        }          
        });
    }));
// Fin! filter;











filter_data();

function filter_data()
{
    
    $('.filter_data').html('<div id="loading" style="" ></div>');
    var action = 'fetch_data';
    var searchFilter = $('#searchFilter').val();
    var minimum_price = $('#hidden_minimum_price').val();
    var maximum_price = $('#hidden_maximum_price').val();
    var marque = get_filter('marque');
    var date_depart = $('#date_depart').val();
    var date_arrivee = $('#date_arrivee').val();
    var ville_depart = $('#ville_depart').val();
    var ville_arrivee = $('#ville_arrivee').val();
    var page = $('#page').val();

    $.ajax({
        url:"server/back/fetch_data.php",
        method:"POST",
        data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, marque:marque, date_depart:date_depart, date_arrivee:date_arrivee,searchFilter:searchFilter,ville_depart:ville_depart,ville_arrivee:ville_arrivee,page:page},
        success:function(data){
            $('.filter_data').html(data);
        }
    });
}

function get_filter(class_name)
{
    var filter = [];
    $('.'+class_name+':checked').each(function(){
        filter.push($(this).val());
    });
    return filter;
}

$('.common_selector').click(function(){
    filter_data();
});
$('.common_selector_date').change(function(){
    var max_price = parseInt($('#hidden_maximum_price').val());
    $('#max-price-txt').text(max_price + ' DH');
    var min_price = parseInt($('#hidden_minimum_price').val());
    $('#min-price-txt').text( min_price + ' DH');
    filter_data();
});

$('#price_range').slider({
    range:true,
    min:0,
    max:9999999,
    values:[0, 999999999],
    step:500,
    stop:function(event, ui)
    {
        $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
        $('#hidden_minimum_price').val(ui.values[0]);
        $('#hidden_maximum_price').val(ui.values[1]);
        filter_data();
    }
});






































































});