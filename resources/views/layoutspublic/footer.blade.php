<script src="{{asset('vendor/jquery/jquery.min.js') }} "></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>

<!-- Menu Toggle Script -->
<script>
	$("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
</script>

{{-- <script>
  $("#filters :checkbox").click(function() {
            $(".container>.row").hide();
            $("#filters :checkbox:checked").each(function() {
                $("." + $(this).val()).show();
            });
        });
</script> --}}

{{-- <script type="text/javascript">
  $(document).ready(function(){
    $("#boton01").click(function () {
      //ocultamos todos los cards
      $(".container>.row").hide();
      alert($('input:checkbox:checked').val());
      let clase = $('input:checkbox:checked').val();
      $("."+clase).show();

    // //saco el valor accediendo a un input de tipo text y name = nombre
    // alert($('input:text[name=nombre]').val());
    // //saco el valor accediendo al id del input = nombre
    // alert($("#nombre").val());
    // //saco el valor accediendo al class del input = nombre   
    // alert($(".nombre").val());
    });
  });
</script> --}}

<script type="text/javascript">
	var byProperty = [], byColor = [], byLocation = [];
		
		$("input[name=tipoofertas]").on( "change", function() {
			if (this.checked) byProperty.push("[data-category~='" + $(this).attr("value") + "']");
			else removeA(byProperty, "[data-category~='" + $(this).attr("value") + "']");
		});
		
		$("input[name=zonas]").on( "change", function() {
			if (this.checked) byColor.push("[data-category~='" + $(this).attr("value") + "']");
			else removeA(byColor, "[data-category~='" + $(this).attr("value") + "']");
		});
		
		$("input[name=tipoinmuebles]").on( "change", function() {
			if (this.checked) byLocation.push("[data-category~='" + $(this).attr("value") + "']");
			else removeA(byLocation, "[data-category~='" + $(this).attr("value") + "']");
		});
		
		$("input").on( "change", function() {
			var str = "Include items \n";
			var selector = '', cselector = '', nselector = '';
					
			var $lis = $('.cardcasas > div'),
				$checked = $('input:checked');	
				
			if ($checked.length) {	
			
				if (byProperty.length) {		
					if (str == "Include items \n") {
						str += "    " + "with (" +  byProperty.join(',') + ")\n";				
						$($('input[name=tipoofertas]:checked')).each(function(index, byProperty){
							if(selector === '') {
								selector += "[data-category~='" + byProperty.id + "']";  					
							} else {
								selector += ",[data-category~='" + byProperty.id + "']";	
							}				 
						});					
					} else {
						str += "    AND " + "with (" +  byProperty.join(' OR ') + ")\n";				
						$($('input[name=zonas]:checked')).each(function(index, byProperty){
							selector += "[data-category~='" + byProperty.id + "']";
						});
					}							
				}
				
				if (byColor.length) {						
					if (str == "Include items \n") {
						str += "    " + "with (" +  byColor.join(' OR ') + ")\n";					
						$($('input[name=zonas]:checked')).each(function(index, byColor){
							if(selector === '') {
								selector += "[data-category~='" + byColor.id + "']";  					
							} else {
								selector += ",[data-category~='" + byColor.id + "']";	
							}				 
						});					
					} else {
						str += "    AND " + "with (" +  byColor.join(' OR ') + ")\n";				
						$($('input[name=zonas]:checked')).each(function(index, byColor){
							if(cselector === '') {
								cselector += "[data-category~='" + byColor.id + "']";  					
							} else {
								cselector += ",[data-category~='" + byColor.id + "']";	
							}					
						});
					}			
				}
				
				if (byLocation.length) {			
					if (str == "Include items \n") {
						str += "    " + "with (" +  byLocation.join(' OR ') + ")\n";				
						$($('input[name=tipoinmuebles]:checked')).each(function(index, byLocation){
							if(selector === '') {
								selector += "[data-category~='" + byLocation.id + "']";  					
							} else {
								selector += ",[data-category~='" + byLocation.id + "']";	
							}				 
						});				
					} else {
						str += "    AND " + "with (" +  byLocation.join(' OR ') + ")\n";				
						$($('input[name=tipoinmuebles]:checked')).each(function(index, byLocation){
							if(nselector === '') {
								nselector += "[data-category~='" + byLocation.id + "']";  					
							} else {
								nselector += ",[data-category~='" + byLocation.id + "']";	
							}	
						});
					}			 
				}
				
				$lis.hide(); 
				console.log(selector);
				console.log(cselector);
				console.log(nselector);
				
				if (cselector === '' && nselector === '') {			
					$('.cardcasas > div').filter(selector).show();
				} else if (cselector === '') {
					$('.cardcasas > div').filter(selector).filter(nselector).show();
				} else if (nselector === '') {
					$('.cardcasas > div').filter(selector).filter(cselector).show();
				} else {
					$('.cardcasas > div').filter(selector).filter(cselector).filter(nselector).show();
				}
				
			} else {
				$lis.show();
			}	
								  
			$("#result").html(str);	
	
		});
		
		function removeA(arr) {
			var what, a = arguments, L = a.length, ax;
			while (L > 1 && arr.length) {
				what = a[--L];
				while ((ax= arr.indexOf(what)) !== -1) {
					arr.splice(ax, 1);
				}
			}
			return arr;
		}
</script>