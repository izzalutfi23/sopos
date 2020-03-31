  'use strict';

  $(document).ready(function () {

	// Modal sukses hapus
	const flashData = $('.flash-data').data('flashdata');

	if(flashData){
		swal({
			title: "Berhasil",
			text: flashData,
			type: "success"
		});
	}
//Basic alert
$('.sweet-1').on('click',function(e){
	e.preventDefault();
	const href = $(this).attr('href');
	swal({
		title: "Kamu Yakin?",
		text: "Data yang kamu pilih akan dihapus!",
		type: "warning",
		showCancelButton: true,
		confirmButtonClass: "btn-danger",
		confirmButtonText: "Ya, Hapus!",
		cancelButtonText: "Batal",
		closeOnConfirm: false
	},
	function(){
		document.location.href = href;
	});
});
	//success message
	document.querySelector('.alert-success-msg').onclick = function(){
		swal("Good job!", "You clicked the button!", "success");
	};

	//Alert confirm
	document.querySelector('.alert-confirm').onclick = function(){
		swal({
			title: "Are you sure?",
			text: "Your will not be able to recover this imaginary file!",
			type: "warning",
			showCancelButton: true,
			confirmButtonClass: "btn-danger",
			confirmButtonText: "Yes, delete it!",
			closeOnConfirm: false
		},
		function(){
			swal("Deleted!", "Your imaginary file has been deleted.", "success");
		});
	};

	//Success or cancel alert
	document.querySelector('.alert-success-cancel').onclick = function(){
		swal({
			title: "Are you sure?",
			text: "You will not be able to recover this imaginary file!",
			type: "warning",
			showCancelButton: true,
			confirmButtonClass: "btn-danger",
			confirmButtonText: "Yes, delete it!",
			cancelButtonText: "No, cancel plx!",
			closeOnConfirm: false,
			closeOnCancel: false
		},
		function(isConfirm) {
			if (isConfirm) {
				swal("Deleted!", "Your imaginary file has been deleted.", "success");
			} else {
				swal("Cancelled", "Your imaginary file is safe :)", "error");
			}
		});
	};
	//prompt alert
	document.querySelector('.alert-prompt').onclick = function(){
		swal({
			title: "An input!",
			text: "Write something interesting:",
			type: "input",
			showCancelButton: true,
			closeOnConfirm: false,
			inputPlaceholder: "Write something"
		}, function (inputValue) {
			if (inputValue === false) return false;
			if (inputValue === "") {
				swal.showInputError("You need to write something!");
				return false
			}
			swal("Nice!", "You wrote: " + inputValue, "success");
		});
	};

	//Ajax alert
	document.querySelector('.alert-ajax').onclick = function(){
		swal({
			title: "Ajax request example",
			text: "Submit to run ajax request",
			type: "info",
			showCancelButton: true,
			closeOnConfirm: false,
			showLoaderOnConfirm: true
		}, function () {
			setTimeout(function () {
				swal("Ajax request finished!");
			}, 2000);
		});
	};


	$('#openBtn').on('click',function () {
		$('#myModal').modal({
			show: true
		})
	});

	$(document).on('show.bs.modal', '.modal', function (event) {
		var zIndex = 1040 + (10 * $('.modal:visible').length);
		$(this).css('z-index', zIndex);
		setTimeout(function() {
			$('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
		}, 0);
	});
});
  