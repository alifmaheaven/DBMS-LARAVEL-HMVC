

//console.log(Histsstable);

if (Histsstable.length > 0) {

   
let htmlHistss = ''
let nomorHistss = 0

Histsstable.forEach(data => {
//console.log(data);

if (data.is_active == 1) {
    var companyHistsisactive = "aktif"
} else{
    var companyHistsisactive = "non aktif"
}
var arrayHistss = nomorHistss
nomorHistss += 1
htmlHistss += '<tr><td style="text-align:center;">'+nomorHistss+'</td><td style="text-align:center;">'+data.hist_am_name+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayHistss+'" onclick="deleteHistsstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayHistss+'" onclick="editHistsstablerow(this);" data-toggle="modal" data-target="#editHists" >Edit</button></td></tr>'
$("#Histsstableid").find('tbody').html(htmlHistss).show();


});
    

} else {

//console.log('halo');    
}



function deleteHistsstablerow(data){     
    
    remHistsstable.push(Histsstable[$(data).data('array')].id_hist_am)
    //console.log("akan dihapus :");
    //console.log(remHistsstable);
    
    
    Histsstable.splice($(data).data('array'), 1);     
    //console.log(Histsstable);

    

    let htmlHistss = ''
    let nomorHistss = 0

    if (Histsstable.length > 0) {
       
    
        Histsstable.forEach(data => {
        //console.log(data);
       
        if (data.is_active == 1) {
            var companyHistsisactive = "aktif"
        } else{
            var companyHistsisactive = "non aktif"
        }
        var arrayHistss = nomorHistss
        nomorHistss += 1
        htmlHistss += '<tr><td style="text-align:center;">'+nomorHistss+'</td><td style="text-align:center;">'+data.hist_am_name+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayHistss+'" onclick="deleteHistsstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayHistss+'" onclick="editHistsstablerow(this);" data-toggle="modal" data-target="#editHists" >Edit</button></td></tr>'
        $("#Histsstableid").find('tbody').html(htmlHistss).show();
    
      
    });
    } else{
    htmlHistss += '<tr><td></td><td></td><td></td></tr>'
     $("#Histsstableid").find('tbody').html(htmlHistss).show();
    }
     
    }

    
    function editHistsstablerow(data){     
   // Histsstable.splice($(data).data('array'), 1);     
    //console.log(Histsstable);

    $('#editHists').find('.modal-body').find("#edit_Histsarray").val($(data).data('array'));
    $('#editHists').find('.modal-body').find("#edit_Histsname").val(Histsstable[$(data).data('array')].hist_am_name);
   
    }

    alertnyaHists = function() {}
    alertnyaHists.edit = function(message1,message2) {
            $('#allertHistsedit').html('<div style="display:block;" class="alert alert-primary alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><Strong>'+message1+' </Strong>'+message2+'</div>')
    }
    alertnyaHists.add = function(message1,message2) {
        $('#allertHistsadd').html('<div style="display:block;" class="alert alert-primary alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><Strong>'+message1+' </Strong>'+message2+'</div>')
    }




$(document).ready(function() {
$('#addHistsbutton').click(function(e){ //on add input button click
e.preventDefault();

//Histsname
var addHistsname = document.getElementById('add_Histsname').value

if (addHistsname == "") {
    alertnyaHists.add('Sorry,','Hists Name Field cannot be empty');
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 4000);
return false
}


Histsstable.push({
                id_hist_am: '' ,
                id_companydetail: '' ,
                hist_am_name: addHistsname,
               
                is_active : 1,
                })

//console.log(Histsstable);

    let htmlHistss = ''
    let nomorHistss = 0

    Histsstable.forEach(data => {
    //console.log(data);
   
    if (data.is_active == 1) {
        var companyHistsisactive = "aktif"
    } else{
        var companyHistsisactive = "non aktif"
    }
    var arrayHistss = nomorHistss
    nomorHistss += 1
    htmlHistss += '<tr><td style="text-align:center;">'+nomorHistss+'</td><td style="text-align:center;">'+data.hist_am_name+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayHistss+'" onclick="deleteHistsstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayHistss+'" onclick="editHistsstablerow(this);" data-toggle="modal" data-target="#editHists" >Edit</button></td></tr>'
    $("#Histsstableid").find('tbody').html(htmlHistss).show();

  
});
jQuery.noConflict();
$("#addHists").removeClass("in");
$(".modal-backdrop").remove();
$("#addHists").hide();
$('#addHists').modal('hide');
     });



$('#editHistsbutton').click(function(e){ //on add input button click
e.preventDefault();

//array 
var editHistsarray = document.getElementById('edit_Histsarray').value
//Histsname
var editHistsname = document.getElementById('edit_Histsname').value


//validation add Hists
if (editHistsname == "") {
    alertnyaHists.edit('Sorry,','Hists Name Field cannot be empty');
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 4000);
return false
}


Histsstable[editHistsarray].hist_am_name = editHistsname



//console.log(Histsstable);

let htmlHistss = ''
let nomorHistss = 0

Histsstable.forEach(data => {
//console.log(data);

if (data.is_active == 1) {
    var companyHistsisactive = "aktif"
} else{
    var companyHistsisactive = "non aktif"
}
var arrayHistss = nomorHistss
nomorHistss += 1
htmlHistss += '<tr><td style="text-align:center;">'+nomorHistss+'</td><td style="text-align:center;">'+data.hist_am_name+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayHistss+'" onclick="deleteHistsstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayHistss+'" onclick="editHistsstablerow(this);" data-toggle="modal" data-target="#editHists" >Edit</button></td></tr>'
$("#Histsstableid").find('tbody').html(htmlHistss).show();


});
jQuery.noConflict();
$("#editHists").removeClass("in");
$(".modal-backdrop").remove();
$("#editHists").hide();
$('#editHists').modal('hide');
     });


    });



