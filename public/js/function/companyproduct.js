

//console.log(Productstable);

if (Productstable.length > 0) {

    let htmlProducts = ''
    let nomorProducts = 0

    Productstable.forEach(data => {
    //console.log(data);
    for (let i = 0; i < Sigmaproduct.length; i++) {
        if (Sigmaproduct[i].id_sigmaproduct == data.id_sigmaproduct) {
            var companyProductSigmaproductname = Sigmaproduct[i].sigmaproduct_name
        }
    }
    if (data.is_active == 1) {
        var companyProductisactive = "aktif"
    } else{
        var companyProductisactive = "non aktif"
    }
    var arrayProducts = nomorProducts
    nomorProducts += 1
    htmlProducts += '<tr><td>'+nomorProducts+'</td><td>'+companyProductSigmaproductname+'</td><td>'+companyProductisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayProducts+'" onclick="deleteProductstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayProducts+'" onclick="editProductstablerow(this);" data-toggle="modal" data-target="#editProduct" >Edit</button></td></tr>'
    $("#Productstableid").find('tbody').html(htmlProducts).show();

  
});

} else {

//console.log('halo');    
}



function deleteProductstablerow(data){     
    
    remProductstable.push(Productstable[$(data).data('array')].id_companyproduct)
    //console.log("akan dihapus :");
    //console.log(remProductstable);
    
    
    Productstable.splice($(data).data('array'), 1);     
    //console.log(Productstable);

    

    let htmlProducts = ''
    let nomorProducts = 0

    if (Productstable.length > 0) {
       
    
        Productstable.forEach(data => {
        //console.log(data);
        for (let i = 0; i < Sigmaproduct.length; i++) {
            if (Sigmaproduct[i].id_sigmaproduct == data.id_sigmaproduct) {
                var companyProductSigmaproductname = Sigmaproduct[i].sigmaproduct_name
            }
        }
        if (data.is_active == 1) {
            var companyProductisactive = "aktif"
        } else{
            var companyProductisactive = "non aktif"
        }
        var arrayProducts = nomorProducts
        nomorProducts += 1
        htmlProducts += '<tr><td>'+nomorProducts+'</td><td>'+companyProductSigmaproductname+'</td><td>'+companyProductisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayProducts+'" onclick="deleteProductstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayProducts+'" onclick="editProductstablerow(this);" data-toggle="modal" data-target="#editProduct" >Edit</button></td></tr>'
        $("#Productstableid").find('tbody').html(htmlProducts).show();
    
      
    });
    } else{
        htmlProducts += '<tr><td></td><td></td><td></td><td></td></tr>'
     $("#Productstableid").find('tbody').html(htmlProducts).show();
    }
     
    }

    
    function editProductstablerow(data){     
   // Productstable.splice($(data).data('array'), 1);     
    //console.log(Productstable);

    $('#editProduct').find('.modal-body').find("#edit_Productarray").val($(data).data('array'));
    $('#editProduct').find('.modal-body').find("#edit_sigmaproduct").val(Productstable[$(data).data('array')].id_sigmaproduct);
    $('#editProduct').find('.modal-body').find("#edit_Productactif").val(Productstable[$(data).data('array')].is_active);

    }



$(document).ready(function() {
$('#addProductbutton').click(function(e){ //on add input button click
e.preventDefault();

//sigmaproduc select
var addProductsigma = document.getElementById('add_sigmaproduct')
var optionProductsigma = addProductsigma.options[addProductsigma.selectedIndex].value;

//Productactive
var addProductactif = document.getElementById('add_Productactif')
var optionProductactif = addProductactif.options[addProductactif.selectedIndex].value;
Productstable.push({
                id_companyproduct: '' ,
                id_companydetail: '' ,
               
                id_sigmaproduct : optionProductsigma,
                
                is_active : optionProductactif,
                })

//console.log(Productstable);

    let htmlProducts = ''
    let nomorProducts = 0

    Productstable.forEach(data => {
    //console.log(data);
    for (let i = 0; i < Sigmaproduct.length; i++) {
        if (Sigmaproduct[i].id_sigmaproduct == data.id_sigmaproduct) {
            var companyProductSigmaproductname = Sigmaproduct[i].sigmaproduct_name
        }
    }
    if (data.is_active == 1) {
        var companyProductisactive = "aktif"
    } else{
        var companyProductisactive = "non aktif"
    }
    var arrayProducts = nomorProducts
    nomorProducts += 1
    htmlProducts += '<tr><td>'+nomorProducts+'</td><td>'+companyProductSigmaproductname+'</td><td>'+companyProductisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayProducts+'" onclick="deleteProductstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayProducts+'" onclick="editProductstablerow(this);" data-toggle="modal" data-target="#editProduct" >Edit</button></td></tr>'
    $("#Productstableid").find('tbody').html(htmlProducts).show();

  
});
jQuery.noConflict();
$("#addProduct").removeClass("in");
$(".modal-backdrop").remove();
$("#addProduct").hide();
$('#addProduct').modal('hide');
     });



$('#editProductbutton').click(function(e){ //on add input button click
e.preventDefault();

//array 
var editProductarray = document.getElementById('edit_Productarray').value
//sigmaproduc select
var editProductsigma = document.getElementById('edit_sigmaproduct')
var optionProductsigma = editProductsigma.options[editProductsigma.selectedIndex].value;

//Productactive
var editProductactif = document.getElementById('edit_Productactif')
var optionProductactif = editProductactif.options[editProductactif.selectedIndex].value;


Productstable[editProductarray].id_sigmaproduct = optionProductsigma

Productstable[editProductarray].is_active = optionProductactif


//console.log(Productstable);

            let htmlProducts = ''
            let nomorProducts = 0

            Productstable.forEach(data => {
            //console.log(data);
            for (let i = 0; i < Sigmaproduct.length; i++) {
                if (Sigmaproduct[i].id_sigmaproduct == data.id_sigmaproduct) {
                    var companyProductSigmaproductname = Sigmaproduct[i].sigmaproduct_name
                }
            }
            if (data.is_active == 1) {
                var companyProductisactive = "aktif"
            } else{
                var companyProductisactive = "non aktif"
            }
            var arrayProducts = nomorProducts
            nomorProducts += 1
            htmlProducts += '<tr><td>'+nomorProducts+'</td><td>'+companyProductSigmaproductname+'</td><td>'+companyProductisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayProducts+'" onclick="deleteProductstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayProducts+'" onclick="editProductstablerow(this);" data-toggle="modal" data-target="#editProduct" >Edit</button></td></tr>'
            $("#Productstableid").find('tbody').html(htmlProducts).show();


            });
jQuery.noConflict();
$("#editProduct").removeClass("in");
$(".modal-backdrop").remove();
$("#editProduct").hide();
$('#editProduct').modal('hide');
     });


    });




    Sigmaproduct.forEach(data => {
    //console.log(data);
    $('<option value="'+data.id_sigmaproduct+'">'+data.sigmaproduct_name+'</option>').appendTo('#add_sigmaproduct');
    $('<option value="'+data.id_sigmaproduct+'">'+data.sigmaproduct_name+'</option>').appendTo('#edit_sigmaproduct');
});
