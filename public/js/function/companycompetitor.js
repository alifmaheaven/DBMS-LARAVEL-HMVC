

//console.log(Competitorsstable);

if (Competitorsstable.length > 0) {

   
    let htmlCompetitorss = ''
    let nomorCompetitorss = 0
    
    Competitorsstable.forEach(data => {
    //console.log(data);
    
    if (data.is_active == 1) {
        var companyCompetitorsisactive = "aktif"
    } else{
        var companyCompetitorsisactive = "non aktif"
    }
    var arrayCompetitorss = nomorCompetitorss
    nomorCompetitorss += 1
    htmlCompetitorss += '<tr><td style="text-align:center;">'+nomorCompetitorss+'</td><td style="text-align:center;">'+data.competitor_name +'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayCompetitorss+'" onclick="deleteCompetitorsstablerow(this);" >Delete</button></td><td><button class="btn btn-warning btn-round" data-array="'+arrayCompetitorss+'" onclick="editCompetitorsstablerow(this);" data-toggle="modal" data-target="#editCompetitors" >Edit</button></td></tr>'
    $("#Competitorsstableid").find('tbody').html(htmlCompetitorss).show();
    
    
    });
        
    
    } else {
    
    //console.log('halo');    
    }
    
    
    
    function deleteCompetitorsstablerow(data){     
        
        remCompetitorsstable.push(Competitorsstable[$(data).data('array')].id_companycompetitor)
        //console.log("akan dihapus :");
        //console.log(remCompetitorsstable);
        
        
        Competitorsstable.splice($(data).data('array'), 1);     
        //console.log(Competitorsstable);
    
        
    
        let htmlCompetitorss = ''
        let nomorCompetitorss = 0
    
        if (Competitorsstable.length > 0) {
           
        
            Competitorsstable.forEach(data => {
            //console.log(data);
           
            if (data.is_active == 1) {
                var companyCompetitorsisactive = "aktif"
            } else{
                var companyCompetitorsisactive = "non aktif"
            }
            var arrayCompetitorss = nomorCompetitorss
            nomorCompetitorss += 1
            htmlCompetitorss += '<tr><td style="text-align:center;">'+nomorCompetitorss+'</td><td style="text-align:center;">'+data.competitor_name +'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayCompetitorss+'" onclick="deleteCompetitorsstablerow(this);" >Delete</button></td><td><button class="btn btn-warning btn-round" data-array="'+arrayCompetitorss+'" onclick="editCompetitorsstablerow(this);" data-toggle="modal" data-target="#editCompetitors" >Edit</button></td></tr>'
            $("#Competitorsstableid").find('tbody').html(htmlCompetitorss).show();
        
          
        });
        } else{
        htmlCompetitorss += '<tr><td></td><td></td><td></td></tr>'
         $("#Competitorsstableid").find('tbody').html(htmlCompetitorss).show();
        }
         
        }
    
        
        function editCompetitorsstablerow(data){     
       // Competitorsstable.splice($(data).data('array'), 1);     
        //console.log(Competitorsstable);
    
        $('#editCompetitors').find('.modal-body').find("#edit_Competitorsarray").val($(data).data('array'));
        $('#editCompetitors').find('.modal-body').find("#edit_Competitorsname").val(Competitorsstable[$(data).data('array')].competitor_name );
       
        }
    
        alertnyaCompetitors = function() {}
        alertnyaCompetitors.edit = function(message1,message2) {
                $('#allertCompetitorsedit').html('<div style="display:block;" class="alert alert-primary alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><Strong>'+message1+' </Strong>'+message2+'</div>')
        }
        alertnyaCompetitors.add = function(message1,message2) {
            $('#allertCompetitorsadd').html('<div style="display:block;" class="alert alert-primary alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><Strong>'+message1+' </Strong>'+message2+'</div>')
        }
    
    
    
    
    $(document).ready(function() {
    $('#addCompetitorsbutton').click(function(e){ //on add input button click
    e.preventDefault();
    
    //Competitorsname
    var addCompetitorsname = document.getElementById('add_Competitorsname').value
    
    if (addCompetitorsname == "") {
        alertnyaCompetitors.add('Sorry,','Competitors Name Field cannot be empty');
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 4000);
    return false
    }
    
    
    Competitorsstable.push({
                    id_companycompetitor: '' ,
                    id_companydetail: '' ,
                    competitor_name : addCompetitorsname,
                   
                    is_active : 1,
                    })
    
    //console.log(Competitorsstable);
    
        let htmlCompetitorss = ''
        let nomorCompetitorss = 0
    
        Competitorsstable.forEach(data => {
        //console.log(data);
       
        if (data.is_active == 1) {
            var companyCompetitorsisactive = "aktif"
        } else{
            var companyCompetitorsisactive = "non aktif"
        }
        var arrayCompetitorss = nomorCompetitorss
        nomorCompetitorss += 1
        htmlCompetitorss += '<tr><td style="text-align:center;">'+nomorCompetitorss+'</td><td style="text-align:center;">'+data.competitor_name +'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayCompetitorss+'" onclick="deleteCompetitorsstablerow(this);" >Delete</button></td><td><button class="btn btn-warning btn-round" data-array="'+arrayCompetitorss+'" onclick="editCompetitorsstablerow(this);" data-toggle="modal" data-target="#editCompetitors" >Edit</button></td></tr>'
        $("#Competitorsstableid").find('tbody').html(htmlCompetitorss).show();
    
      
    });
    jQuery.noConflict();
    $("#addCompetitors").removeClass("in");
    $(".modal-backdrop").remove();
    $("#addCompetitors").hide();
    $('#addCompetitors').modal('hide');
         });
    
    
    
    $('#editCompetitorsbutton').click(function(e){ //on add input button click
    e.preventDefault();
    
    //array 
    var editCompetitorsarray = document.getElementById('edit_Competitorsarray').value
    //Competitorsname
    var editCompetitorsname = document.getElementById('edit_Competitorsname').value
    
    
    //validation add Competitors
    if (editCompetitorsname == "") {
        alertnyaCompetitors.edit('Sorry,','Competitors Name Field cannot be empty');
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 4000);
    return false
    }
    
    
    Competitorsstable[editCompetitorsarray].competitor_name  = editCompetitorsname
    
    
    
    //console.log(Competitorsstable);
    
    let htmlCompetitorss = ''
    let nomorCompetitorss = 0
    
    Competitorsstable.forEach(data => {
    //console.log(data);
    
    if (data.is_active == 1) {
        var companyCompetitorsisactive = "aktif"
    } else{
        var companyCompetitorsisactive = "non aktif"
    }
    var arrayCompetitorss = nomorCompetitorss
    nomorCompetitorss += 1
    htmlCompetitorss += '<tr><td style="text-align:center;">'+nomorCompetitorss+'</td><td style="text-align:center;">'+data.competitor_name +'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayCompetitorss+'" onclick="deleteCompetitorsstablerow(this);" >Delete</button></td><td><button class="btn btn-warning btn-round" data-array="'+arrayCompetitorss+'" onclick="editCompetitorsstablerow(this);" data-toggle="modal" data-target="#editCompetitors" >Edit</button></td></tr>'
    $("#Competitorsstableid").find('tbody').html(htmlCompetitorss).show();
    
    
    });
    jQuery.noConflict();
    $("#editCompetitors").removeClass("in");
    $(".modal-backdrop").remove();
    $("#editCompetitors").hide();
    $('#editCompetitors').modal('hide');
         });
    
    
        });
    
    
    
    