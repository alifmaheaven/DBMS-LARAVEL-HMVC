

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
    htmlPartners += '<tr><td style="text-align:center;">'+nomorPartners+'</td><td style="text-align:center;">'+data.companypartner_name+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayPartners+'" onclick="deletePartnerstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayPartners+'" onclick="editPartnerstablerow(this);" data-toggle="modal" data-target="#editPartner" >Edit</button></td></tr>'
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
    htmlPartners += '<tr><td style="text-align:center;">'+nomorPartners+'</td><td>'+data.companypartner_name+'</td><td style="text-align:center;"><button class="btn btn-primary btn-round" data-array="'+arrayPartners+'" onclick="deletePartnerstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayPartners+'" onclick="editPartnerstablerow(this);" data-toggle="modal" data-target="#editPartner" >Edit</button></td></tr>'
    $("#Partnerstableid").find('tbody').html(htmlPartners).show();

  
}); 
    } else{
        htmlPartners += '<tr><td></td><td></td><td></td></tr>'
     $("#Partnerstableid").find('tbody').html(htmlPartners).show();
    }
     
    }

    
    function editPartnerstablerow(data){     
   // Partnerstable.splice($(data).data('array'), 1);     
    //console.log(Partnerstable);

    $('#editPartner').find('.modal-body').find("#edit_Partnerarray").val($(data).data('array'));
    $('#editPartner').find('.modal-body').find("#edit_Partnername").val(Partnerstable[$(data).data('array')].companypartner_name);
    
    }
    alertnyaPartner = function() {}
    alertnyaPartner.edit = function(message1,message2) {
            $('#allertPartneredit').html('<div style="display:block;" class="alert alert-primary alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><Strong>'+message1+' </Strong>'+message2+'</div>')
    }
    alertnyaPartner.add = function(message1,message2) {
        $('#allertPartneradd').html('<div style="display:block;" class="alert alert-primary alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><Strong>'+message1+' </Strong>'+message2+'</div>')
    }



$(document).ready(function() {
$('#addPartnerbutton').click(function(e){ //on add input button click
e.preventDefault();

//Partnername
var addPartnername = document.getElementById('add_Partnername').value


if (addPartnername == "") {
    alertnyaPartner.add('Sorry,','Partner Name Field cannot be empty');
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 4000);
return false
}

Partnerstable.push({
                id_companypartner: '' ,
                id_companydetail: '' ,
                companypartner_name: addPartnername,
                is_active : 1,
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
    htmlPartners += '<tr><td style="text-align:center;">'+nomorPartners+'</td><td style="text-align:center;">'+data.companypartner_name+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayPartners+'" onclick="deletePartnerstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayPartners+'" onclick="editPartnerstablerow(this);" data-toggle="modal" data-target="#editPartner" >Edit</button></td></tr>'
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
//validation add Partner
if (editPartnername == "") {
    alertnyaPartner.edit('Sorry,','Partner Name Field cannot be empty');
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 4000);
return false
}


Partnerstable[editPartnerarray].companypartner_name = editPartnername




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
            htmlPartners += '<tr><td style="text-align:center;">'+nomorPartners+'</td><td style="text-align:center;">'+data.companypartner_name+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayPartners+'" onclick="deletePartnerstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayPartners+'" onclick="editPartnerstablerow(this);" data-toggle="modal" data-target="#editPartner" >Edit</button></td></tr>'
            $("#Partnerstableid").find('tbody').html(htmlPartners).show();


            });
jQuery.noConflict();
$("#editPartner").removeClass("in");
$(".modal-backdrop").remove();
$("#editPartner").hide();
$('#editPartner').modal('hide');
     });


    });



