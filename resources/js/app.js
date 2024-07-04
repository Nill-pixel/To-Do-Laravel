import './bootstrap';
import 'bootstrap'
import $ from 'jquery';

// Seu código jQuery aqui
$(function () {
  $('.edit-btn').on('click', function () {
    var $taskInfo = $(this).closest('li').find('.task-info');
    $taskInfo.find('.task-title').addClass('d-none');
    $taskInfo.find('.task-input').removeClass('d-none');
    $(this).addClass('d-none');
    $(this).siblings('.save-btn').removeClass('d-none');
  });

  $('.save-btn').on('click', function () {
    var $taskInfo = $(this).closest('li').find('.task-info');
    var newValue = $taskInfo.find('.task-input').val();
    $taskInfo.find('.task-title').text(newValue).removeClass('d-none');
    $taskInfo.find('.task-input').addClass('d-none');
    $(this).addClass('d-none');
    $(this).siblings('.edit-btn').removeClass('d-none');
  });
});

