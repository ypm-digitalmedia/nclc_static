var slides, families, countries;

var saved = []
var savedString = "";
var savedNew = []
var savedStringNew = "";

var savedData = [];
var savedDataString = "";
var numMax = 200;
var num = numShown = 0;

$(document).ready(function() {
	
	createLocalStorage();
	getLocalStorage();


	// query saved results and replace buttons on result pages
	
	$(".saveresult").each(function() {
		
		var slide = $(this).attr("slide");
		if (typeof slide !== 'undefined') {
			
			// alert(slide);
			
			if( _.indexOf(saved,slide) == -1 ) {
				// item not in array!
			} else {
				// item already in array!
				var savedHTML = "<p align='center' style='margin-top: 20px'><strong>SAVED</strong>&nbsp;<a href='javascript:void(0)' class='removesaved' slide='"+slide+"'>Remove</a></p>";
				$(this).replaceWith(savedHTML);
			}
			
		}
		
	});
	
	// saved results
	if( $("body").hasClass("saved-results") ) {
		
		if( saved.length == 0 ) {
			$("#content").html("<h2>No saved slides were found.</h2>")
		} else {

			// take savedString, send it to getSaved.php, return data table

			$.ajax({
				type: "POST",
				url: 'getSaved.php',
				data: {saved: savedString},
				async: false,
				success: function(response){
					console.log("response:");
					savedDataString = response;
					console.log(savedDataString);
					console.log("response, parsed:");
					savedData = JSON.parse(response);
					console.log(savedData);
				}
			});


			if( savedData.length <= numMax ) {
				num = savedData.length;
				numShown = savedData.length;
			} else {
				num = numMax;
				numShown = "many";
			}


			var savedHTML = '<div id="yw0" class="grid-view">';
				savedHTML += '	<table class="items sortable-items"><thead><tr>';
				savedHTML += '			<th id="yw0_c0">Remove</th><th id="yw0_c1"><a class="sort-link" href="#">Slide</a></th><th id="yw0_c2"><a class="sort-link" href="#">Image</a></th><th id="yw0_c3">Family Name</th><th id="yw0_c4"><a class="sort-link" href="#">Genus</a></th><th id="yw0_c5"><a class="sort-link" href="#">Species</a></th><th id="yw0_c6">Sort</th></tr>';
				savedHTML += '		</thead><tbody class="ui-sortable">';


			_.forEach(savedData,function(row,index) {

				var rowType = index%2==0?"odd":"even";

				savedHTML += '			<tr class="savedrow '+rowType+'"><td><a class="removesaved-table" href="#" slide="'+ row['slide-id']+'">Remove</a></td><td><a href="../slide/'+ row['slide-id']+'" title="View Info">'+row['slide-id']+'</a></td><td><a href="http://images.peabody.yale.edu/nclc/' + row['image'] + '.jpg" rel="prettyPhoto[]"><img src="http://images.peabody.yale.edu/nclc/web/'+row['image']+'.jpg" alt="'+row['image']+'"></a></td><td>'+row['family']+'</td><td>'+row['genus']+'</td><td>'+row['species']+'</td><td class="sortable-column" data-id="'+ row['slide-id'] +'" image-id="'+ row['image']+'"><img class="sortable-column-handler" style="cursor: move;" src="../assets/78bd912c/icon.png" alt=""></td></tr>';

			});


				savedHTML += '		</tbody></table>';
				savedHTML += '		<div class="summary">Displaying <strong>'+num+'</strong> of <strong>'+numShown+' </strong>saved records.</div>';
				savedHTML += '</div>';

			$("#content").html(savedHTML);

			$('#pretty_photo a').attr('rel','prettyPhoto[]');
			$('a[rel^="prettyPhoto"]').prettyPhoto({'opacity':0.6,'modal':true,'theme':'facebook'});
		
			$('.sortable-clipboard-area').sortable({
					connectWith : '.sortable-items tbody'
				});

			$('#yw0 .sortable-items tbody').sortable({
				connectWith: '.sortable-clipboard-area',
				axis : 'y',
				update : function (event, ui) {
					var ids = [];
					$('#yw0 .sortable-items .sortable-column').each(function(i) {
						ids[i] = $(this).data('id');
					});

					var clipboard = [];
					$('.sortable-clipboard-area .sortable-column').each(function(i) {
						clipboard[i] = $(this).data('id');
					});

				}
			});

			$("#content").append('<p><strong><input class="btn" name="yt0" id="createpdf" type="button" value="Create PDF"></strong></p>');

			$("#content").append('<p><strong><input class="btn viewinfo new-search-savedpage" name="yt0" type="button" value="Search"></strong></p>');
		}
	}
	
	
	
	
	
	
	// event listeners =============================================================
	
	$("#searchAgain").click(function() {
		if( $("#findslides").is(":hidden") ) {
			$("#findslides").slideDown();
			$("#searchAgain").text("Hide Search Form");
		} else {
			$("#findslides").slideUp();
			$("#searchAgain").text("Search Again");
		}
	});
	
	
	
	$(".new-search").click(function() {
		$("#searchAgain").text("Hide Search Form");
		$("#findslides").show();
		$(document).scrollTop(0);
	});
	
	$(".new-search-savedpage").click(function() {
		document.location = "../search/";
	})
	
	
	$(".clear-button").click(function() {
		$(this).closest('form').find("input[type=text]").val("");
		$(this).closest('form').find("select").prop('selectedIndex',0);
	});
	
	
	$(".infobutton").click(function() {
		var slide = $(this).attr("slide");
		if (typeof slide !== 'undefined') {
			document.location = "../slide/" + slide;
		}
	});

	$('#createpdf').click(function(){
		var data = [];
		$('.ui-sortable tr td.sortable-column').each(function(){

//			data.push($(this).attr('data-id'));
			data.push($(this).attr('image-id'));
		});
		
 	  if( data.length > 0 ) {
		  $('form').remove();
		  $('<form method="post" action="makePDF.php" target="_blank"></form>').appendTo('body');
		  $("<input type='hidden' id='slidedata' name='saved' />").appendTo('form');
		  $('#slidedata').val(JSON.stringify(data));
		  $('form').submit();
	  } else {
		  alert( "no saved slides!");
	  }
		return false;
	});


	
	
	// event listeners - programatically-added element trick =====================
	
	$("body").click(function (event) {
		if ($(event.target).hasClass("removesaved") ) {
			// 'remove' link on search results page
			
			getLocalStorage();
			var slide = $(event.target).attr("slide").toString();
			if (typeof slide !== 'undefined') {
				var originalHTML = "<p><strong><input class='btnsmall saveresult' slide='" + slide + "' name='yt0' type='button' value='Save slide'></strong></p>";
				savedNew = [];
				savedNewString = "";
				
				savedNew = _.without(saved,slide);

				savedStringNew = savedNew.join("|");
				localStorage.setItem("nclcSaved",savedStringNew);
				
				console.log("slide " + slide + " removed.");
				
				$(event.target).parent().replaceWith(originalHTML);
				
				getLocalStorage();
			}
		} else if( $(event.target).hasClass("removesaved-table")) {
			// 'remove' link on saved results	
			
			getLocalStorage();
			var slide = $(event.target).attr("slide").toString();
			if( typeof slide !== 'undefined') {
				
				savedNew = [];
				savedNewString = "";
				
				savedNew = _.without(saved,slide);
				savedData = _.reject(savedData,function(o) {
					return o['slide-id'] == slide;
				});
				console.log(savedData);
				
				savedStringNew = savedNew.join("|");
				localStorage.setItem("nclcSaved",savedStringNew);
				
				if( savedData.length <= numMax ) {
					num = savedData.length;
					numShown = savedData.length;
				} else {
					num = numMax;
					numShown = "many";
				}
				
				$(".summary").html('Displaying <strong>'+num+'</strong> of <strong>'+numShown+' </strong>saved records.</div>');
				
				$(event.target).closest('.savedrow').remove();
			
				console.log("slide " + slide + " removed.");
				getLocalStorage();
			}
		} else if( $(event.target).hasClass("saveresult")) {
			
			var slide = $(event.target).attr("slide").toString();
			if (typeof slide !== 'undefined') {
				getLocalStorage();
				savedNew = [];
				savedNewString = "";
				savedNew = saved;

				savedNew.push(slide.toString());
				savedNew = _.uniq(savedNew);
				savedStringNew = savedNew.join("|");

				localStorage.setItem("nclcSaved",savedStringNew);

				console.log("slide " + slide + " added.");

				var savedHTML = "<p align='center' style='margin-top: 20px'><strong>SAVED</strong>&nbsp;<a href='javascript:void(0)' class='removesaved' slide='"+slide+"'>Remove</a></p>";
				$(event.target).replaceWith(savedHTML);

				getLocalStorage();
			}


		}
	});
	
	
});




function createLocalStorage() {
	console.log('initializing local storage.\n\n');
	if (typeof(Storage) == "undefined") {
	  // Sorry! No Web Storage support..
		console.error("localStorage not supported.  Results may not be saved.")
	} else {
	  // Code for localStorage/sessionStorage.
		
		if( !localStorage.getItem('nclcSaved') || localStorage.getItem('nclcSaved').length == 0 ) {
			console.warn("localStorage variable 'nclcSaved' is empty.");
			localStorage.setItem('nclcSaved',"");
		}
	}
}

function getLocalStorage () {
	// saved results => LocalStorage ===============================================
	console.log('initializing local storage.\n\n');
	if (typeof(Storage) == "undefined") {
	  // Sorry! No Web Storage support..
		console.error("localStorage not supported.  Results may not be saved.")
	} else {
	  // Code for localStorage/sessionStorage.
		
		if( localStorage.getItem('nclcSaved') ) {

			
			savedString = localStorage.getItem('nclcSaved');
			saved = savedString.split("|");
			console.log("SAVED: \n");
			console.log(savedString);
			console.log(saved);
			console.log("\n");
		}
	}
}
