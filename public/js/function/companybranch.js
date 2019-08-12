

//console.log(Branchstable);

if (Branchstable.length > 0) {

   
let htmlBranchs = ''
let nomorBranchs = 0

Branchstable.forEach(data => {
//console.log(data);

if (data.is_active == 1) {
    var companyBranchisactive = "aktif"
} else{
    var companyBranchisactive = "non aktif"
}
var arrayBranchs = nomorBranchs
nomorBranchs += 1
htmlBranchs += '<tr><td style="text-align:center;">'+nomorBranchs+'</td><td  style="text-align:center;">'+data.companybranch+'</td><td  style="text-align:center;">'+data.companybranch_addr+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayBranchs+'" onclick="deleteBranchstablerow(this);" >Delete</button></td><td><button class="btn btn-warning btn-round" data-array="'+arrayBranchs+'" onclick="editBranchstablerow(this);" data-toggle="modal" data-target="#editBranch" >Edit</button></td></tr>'
$("#Branchstableid").find('tbody').html(htmlBranchs).show();

  
});
    

} else {

console.log('halo');    
}



function deleteBranchstablerow(data){     
    
    remBranchstable.push(Branchstable[$(data).data('array')].id_companybranch)
    console.log("akan dihapus :");
    console.log(remBranchstable);
    
    
    Branchstable.splice($(data).data('array'), 1);     
    console.log(Branchstable);

    

    let htmlBranchs = ''
    let nomorBranchs = 0

    if (Branchstable.length > 0) {
    

    Branchstable.forEach(data => {
    //console.log(data);
    
    if (data.is_active == 1) {
        var companyBranchisactive = "aktif"
    } else{
        var companyBranchisactive = "non aktif"
    }
    var arrayBranchs = nomorBranchs
    nomorBranchs += 1
    htmlBranchs += '<tr><td style="text-align:center;">'+nomorBranchs+'</td><td  style="text-align:center;">'+data.companybranch+'</td><td  style="text-align:center;">'+data.companybranch_addr+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayBranchs+'" onclick="deleteBranchstablerow(this);" >Delete</button></td><td><button class="btn btn-warning btn-round" data-array="'+arrayBranchs+'" onclick="editBranchstablerow(this);" data-toggle="modal" data-target="#editBranch" >Edit</button></td></tr>'
    $("#Branchstableid").find('tbody').html(htmlBranchs).show();
});
    } else{
        htmlBranchs += '<tr><td></td><td></td><td></td><td></td></tr>'
     $("#Branchstableid").find('tbody').html(htmlBranchs).show();
    }
     
    }

    
    function editBranchstablerow(data){     
   // Branchstable.splice($(data).data('array'), 1);     
    //console.log(Branchstable);

    $('#editBranch').find('.modal-body').find("#edit_Brancharray").val($(data).data('array'));
    $('#editBranch').find('.modal-body').find("#edit_Branchname").val(Branchstable[$(data).data('array')].companybranch);
    $('#editBranch').find('.modal-body').find("#edit_Branchaddress").val(Branchstable[$(data).data('array')].companybranch_addr);
    

    }

    alertnyabranch = function() {}
    alertnyabranch.edit = function(message1,message2) {
            $('#allertBranchedit').html('<div style="display:block;" class="alert alert-primary alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><Strong>'+message1+' </Strong>'+message2+'</div>')
    }
    alertnyabranch.add = function(message1,message2) {
        $('#allertBranchadd').html('<div style="display:block;" class="alert alert-primary alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><Strong>'+message1+' </Strong>'+message2+'</div>')
    }



$(document).ready(function() {
$('#addBranchbutton').click(function(e){ //on add input button click
e.preventDefault();

//Branch name
var addBranchname = document.getElementById('add_Branchname').value

//branch address
var addBranchaddress = document.getElementById('add_Branchaddress').value

//validation add branch
if (addBranchname == "") {
    alertnyabranch.add('Sorry,','Branch Name Field cannot be empty');
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 4000);
return false
}
if (addBranchaddress == "") {
    alertnyabranch.add('Sorry,','Branch address Field cannot be empty');
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 4000);
return false
}

Branchstable.push({
                id_companybranch: '' ,
                id_companydetail: '' ,
                companybranch: addBranchname,
                companybranch_addr: addBranchaddress,
                is_active : 1,
                })

console.log(Branchstable);

    let htmlBranchs = ''
    let nomorBranchs = 0

    Branchstable.forEach(data => {
    //console.log(data);
    
   
    var arrayBranchs = nomorBranchs
    nomorBranchs += 1
    htmlBranchs += '<tr><td style="text-align:center;">'+nomorBranchs+'</td><td  style="text-align:center;">'+data.companybranch+'</td><td  style="text-align:center;">'+data.companybranch_addr+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayBranchs+'" onclick="deleteBranchstablerow(this);" >Delete</button></td><td><button class="btn btn-warning btn-round" data-array="'+arrayBranchs+'" onclick="editBranchstablerow(this);" data-toggle="modal" data-target="#editBranch" >Edit</button></td></tr>'

    $("#Branchstableid").find('tbody').html(htmlBranchs).show();

  
});
jQuery.noConflict();
$("#addBranch").removeClass("in");
$(".modal-backdrop").remove();
$("#addBranch").hide();
$('#addBranch').modal('hide');
     });



$('#editBranchbutton').click(function(e){ //on add input button click
e.preventDefault();

//array 
var editBrancharray = document.getElementById('edit_Brancharray').value

//Branch name
var addBranchname = document.getElementById('edit_Branchname').value

//branch address
var addBranchaddress = document.getElementById('edit_Branchaddress').value

//validation edt branch
if (addBranchname == "") {
    alertnyabranch.edit('Sorry,','Branch Name Field cannot be empty');
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 4000);
return false
}
if (addBranchaddress == "") {
    alertnyabranch.edit('Sorry,','Branch address Field cannot be empty');
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 4000);
return false
}

Branchstable[editBrancharray].companybranch = addBranchname
Branchstable[editBrancharray].companybranch_addr = addBranchaddress



//console.log(Branchstable);

let htmlBranchs = ''
let nomorBranchs = 0

Branchstable.forEach(data => {
//console.log(data);


var arrayBranchs = nomorBranchs
nomorBranchs += 1
htmlBranchs += '<tr><td style="text-align:center;">'+nomorBranchs+'</td><td  style="text-align:center;">'+data.companybranch+'</td><td  style="text-align:center;">'+data.companybranch_addr+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayBranchs+'" onclick="deleteBranchstablerow(this);" >Delete</button></td><td><button class="btn btn-warning btn-round" data-array="'+arrayBranchs+'" onclick="editBranchstablerow(this);" data-toggle="modal" data-target="#editBranch" >Edit</button></td></tr>'

$("#Branchstableid").find('tbody').html(htmlBranchs).show();

  
});
jQuery.noConflict();
$("#editBranch").removeClass("in");
$(".modal-backdrop").remove();
$("#editBranch").hide();
$('#editBranch').modal('hide');
     });


    });




