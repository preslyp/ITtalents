$(document).ready(function() {
	

	$('#create-task').submit(function (event) {
		event.preventDefault();
		
		var form = $(this);

		var formData = form.serialize();

		$.ajax({

			url: 'create.php',
			method: 'POST',
			data: formData,
			success: function (data) {
				$('#ajax_msg').css('display', 'block').delay(3000).slideUp(300).html(data);
				document.getElementById('create-task').reset();
				location.reload();
			}

		});

	});

	$('#task-list').load('read.php');
});


function makeElementEditable(div) {
	div.style.border = "1px solid lavender";
	div.style.padding = "5px";
	div.style.background = "white";
	div.contentEditable = true;
}

function updateTaskName(target, taskId) {
	var data = target.textContent;
	target.style.border = "none";
	target.style.padding = "0px";
	target.style.background = "#ececec";
	target.contentEditable = false;


	$.ajax({
		url: 'update.php',
		method: 'POST',
		data: {name:data, id:taskId},
		success: function (data) {
			$('#ajax_msg').css('display', 'block').delay(3000).slideUp(300).html(data);
		}
	});
}


function updateTaskDescription(target, taskId) {
	var data = target.textContent;
	target.style.border = "none";
	target.style.padding = "0px";
	target.style.background = "#ececec";
	target.contentEditable = false;


	$.ajax({
		url: 'update.php',
		method: 'POST',
		data: {description:data, id:taskId},
		success: function (data) {
			$('#ajax_msg').css('display', 'block').delay(3000).slideUp(300).html(data);
		}
	});
}



function updateTaskStatus(target, taskId) {
	var data = target.textContent;
	target.style.border = "none";
	target.style.padding = "0px";
	target.style.background = "#ececec";
	target.contentEditable = false;


	$.ajax({
		url: 'update.php',
		method: 'POST',
		data: {status:data, id:taskId},
		success: function (data) {
			$('#ajax_msg').css('display', 'block').delay(3000).slideUp(300).html(data);
		}
	});
}

function deleteTask(taskId) {
	if (confirm("Do you realy wonat to delete this task?")) {

		$.ajax({
			url: 'delete.php',
			method: 'POST',
			data: {id:taskId},
			success: function (data) {
				$('#ajax_msg').css('display', 'block').delay(3000).slideUp(300).html(data);
			}
		});
		$('#task-list').load('read.php');
	}
	return false;
}