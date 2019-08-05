

//console.log(Partnerstable);

if (Partnerstable.length > 0) {

    let htmlPartners = ''
    let nomorPartners = 0

    Partnerstable.forEach(data => {
    //console.log(data);

    if (data.is_active == 1) {
        var companyPartnerisactive = "aktif"
    } else{
        var companyPartnerisactive = "non aktif"
    }
    var arrayPartners = nomorPartners
    nomorPartners += 1
    htmlPartners += '<tr><td>'+nomorPartners+'</td><td>'+data.companypartner_name+'</td><td>'+companyPartnerisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayPartners+'" onclick="deletePartnerstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayPartners+'" onclick="editPartnerstablerow(this);" data-toggle="modal" data-target="#editPartner" >Edit</button></td></tr>'
    $("#Partnerstableid").find('tbody').html(htmlPartners).show();


    });
    

} else {

//console.log('halo');    
}



function deletePartnerstablerow(data){     
    
    remPartnerstable.push(Partnerstable[$(data).data('array')].id_companypartner)
    console.log("akan dihapus :");
    console.log(remPartnerstable);
    
    
    Partnerstable.splice($(data).data('array'), 1);     
    //console.log(Partnerstable);

    

    let htmlPartners = ''
    let nomorPartners = 0

    if (Partnerstable.length > 0) {
      

    Partnerstable.forEach(data => {
    //console.log(data);

    if (data.is_active == 1) {
        var companyPartnerisactive = "aktif"
    } else{
        var companyPartnerisactive = "non aktif"
    }
    var arrayPartners = nomorPartners
    nomorPartners += 1
    htmlPartners += '<tr><td>'+nomorPartners+'</td><td>'+data.companypartner_name+'</td><td>'+companyPartnerisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayPartners+'" onclick="deletePartnerstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayPartners+'" onclick="editPartnerstablerow(this);" data-toggle="modal" data-target="#editPartner" >Edit</button></td></tr>'
    $("#Partnerstableid").find('tbody').html(htmlPartners).show();

  
}); 
    } else{
        htmlPartners += '<tr><td></td><td></td><td></td><td></td></tr>'
     $("#Partnerstableid").find('tbody').html(htmlPartners).show();
    }
     
    }

    
    function editPartnerstablerow(data){     
   // Partnerstable.splice($(data).data('array'), 1);     
    //console.log(Partnerstable);

    $('#editPartner').find('.modal-body').find("#edit_Partnerarray").val($(data).data('array'));
    $('#editPartner').find('.modal-body').find("#edit_Partnername").val(Partnerstable[$(data).data('array')].companypartner_name);
    $('#editPartner').find('.modal-body').find("#edit_Partneractif").val(Partnerstable[$(data).data('array')].is_active);

    }



$(document).ready(function() {
$('#addPartnerbutton').click(function(e){ //on add input button click
e.preventDefault();

//Partnername
var addPartnername = document.getElementById('add_Partnername').value
//Partneractive
var addPartneractif = document.getElementById('add_Partneractif')
var optionPartneractif = addPartneractif.options[addPartneractif.selectedIndex].value;
Partnerstable.push({
                id_companypartner: '' ,
                id_companydetail: '' ,
                companypartner_name: addPartnername,
                is_active : optionPartneractif,
                })

//console.log(Partnerstable);

    let htmlPartners = ''
    let nomorPartners = 0

    Partnerstable.forEach(data => {
    //console.log(data);

    if (data.is_active == 1) {
        var companyPartnerisactive = "aktif"
    } else{
        var companyPartnerisactive = "non aktif"
    }
    var arrayPartners = nomorPartners
    nomorPartners += 1
    htmlPartners += '<tr><td>'+nomorPartners+'</td><td>'+data.companypartner_name+'</td><td>'+companyPartnerisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayPartners+'" onclick="deletePartnerstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayPartners+'" onclick="editPartnerstablerow(this);" data-toggle="modal" data-target="#editPartner" >Edit</button></td></tr>'
    $("#Partnerstableid").find('tbody').html(htmlPartners).show();

  
});
jQuery.noConflict();
$("#addPartner").removeClass("in");
$(".modal-backdrop").remove();
$("#addPartner").hide();
$('#addPartner').modal('hide');
     });



$('#editPartnerbutton').click(function(e){ //on add input button click
e.preventDefault();

//array 
var editPartnerarray = document.getElementById('edit_Partnerarray').value
//Partnername
var editPartnername = document.getElementById('edit_Partnername').value

//Partneractive
var editPartneractif = document.getElementById('edit_Partneractif')
var optionPartneractif = editPartneractif.options[editPartneractif.selectedIndex].value;

Partnerstable[editPartnerarray].companypartner_name = editPartnername

Partnerstable[editPartnerarray].is_active = optionPartneractif


//console.log(Partnerstable);

            let htmlPartners = ''
            let nomorPartners = 0

            Partnerstable.forEach(data => {
            //console.log(data);

            if (data.is_active == 1) {
                var companyPartnerisactive = "aktif"
            } else{
                var companyPartnerisactive = "non aktif"
            }
            var arrayPartners = nomorPartners
            nomorPartners += 1
            htmlPartners += '<tr><td>'+nomorPartners+'</td><td>'+data.companypartner_name+'</td><td>'+companyPartnerisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayPartners+'" onclick="deletePartnerstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayPartners+'" onclick="editPartnerstablerow(this);" data-toggle="modal" data-target="#editPartner" >Edit</button></td></tr>'
            $("#Partnerstableid").find('tbody').html(htmlPartners).show();


            });
jQuery.noConflict();
$("#editPartner").removeClass("in");
$(".modal-backdrop").remove();
$("#editPartner").hide();
$('#editPartner').modal('hide');
     });


    });



