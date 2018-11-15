$(function () {
  var kanbanCol = $('.panel-body');
  kanbanCol.css('max-height', (window.innerHeight - 150) + 'px');

  var kanbanColCount = parseInt(kanbanCol.length);
  $('.container-fluid').css('min-width', (kanbanColCount * 350) + 'px');

  draggableInit();

  $('.panel-heading').click(function() {
      var $panelBody = $(this).parent().children('.panel-body');
      $panelBody.slideToggle();
  });
});

function draggableInit() {
  var sourceId;

  $('[draggable=true]').bind('dragstart', function (event) {
      sourceId = $(this).parent().attr('id');
      event.originalEvent.dataTransfer.setData("text/plain", event.target.getAttribute('id'));
  });

  $('.panel-body').bind('dragover', function (event) {
      event.preventDefault();
  });

  $('.panel-body').bind('drop', function (event) {
      var children = $(this).children();
      var targetId = children.attr('id');

      if (sourceId != targetId) {
          var elementId = event.originalEvent.dataTransfer.getData("text/plain");

          $('#processing-modal').modal('toggle'); //before post


          // Post data 
          setTimeout(function () {
              var element = document.getElementById(elementId);
              children.prepend(element);
              $('#processing-modal').modal('toggle'); // after post
          }, 1000);

      }

      event.preventDefault();
  });
}
var KanbanTest = new jKanban({
  element: '#myKanban',
  gutter: '10px',
  widthBoard: '370px',
  click: function (el) {
      console.log("Trigger on all items click!");
  },
  buttonClick: function (el, boardId) {
      console.log(el);
      console.log(boardId);
      var formItem = document.createElement('form');
      formItem.setAttribute("class", "itemform");
      formItem.innerHTML = '<div class="form-group"><textarea class="form-control" rows="2" autofocus></textarea></div><div class="form-group"><button type="submit" class="btn btn-primary btn-xs pull-right">Submit</button><button type="button" id="CancelBtn" class="btn btn-default btn-xs pull-right">Cancel</button></div>'

      KanbanTest.addForm(boardId, formItem);
      formItem.addEventListener("submit", function (e) {
          e.preventDefault();
          var text = e.target[0].value
          KanbanTest.addElement(boardId, {
              "title": text,
          })
          formItem.parentNode.removeChild(formItem);
      });
      document.getElementById('CancelBtn').onclick = function () {
          formItem.parentNode.removeChild(formItem)
      }
  },
  addItemButton: true,
  boards: [
      {
          "id": "_todo",
          "title": "Pendente",
          "class": "info,good",
          "dragTo": ['_working'],
          "item": [
              {
                  "id": "_test_delete",
                  "title": "Try drag this (Look the console)",
                  "drag": function (el, source) {
                      console.log("START DRAG: " + el.dataset.eid);
                  },
                  "dragend": function (el) {
                      console.log("END DRAG: " + el.dataset.eid);
                  },
                  "drop": function(el){
                      console.log('DROPPED: ' + el.dataset.eid )
                  }
              },
              {
                  "title": "Try Click This!",
                  "click": function (el) {
                      alert("click");
                  },
              }
          ]
      },
      {
          "id": "_working",
          "title": "Trabalhando",
          "class": "warning",
          "item": [
              {
                  "title": "Do Something!",
              },
              {
                  "title": "Run?",
              }
          ]
      },
      {
          "id": "_done",
          "title": "Finalizado",
          "class": "success",
          "dragTo": ['_working'],
          "item": [
              {
                  "title": "All right",
              },
              {
                  "title": "Ok!",
              }
          ]
      }
  ]
});

var toDoButton = document.getElementById('addToDo');
toDoButton.addEventListener('click', function () {
  KanbanTest.addElement(
      "_todo",
      {
          "title": "Test Add",
      }
  );
});

var addBoardDefault = document.getElementById('addDefault');
addBoardDefault.addEventListener('click', function () {
  KanbanTest.addBoards(
      [{
          "id": "_default",
          "title": "Kanban Default",
          "item": [
              {
                  "title": "Default Item",
              },
              {
                  "title": "Default Item 2",
              },
              {
                  "title": "Default Item 3",
              }
          ]
      }]
  )
});