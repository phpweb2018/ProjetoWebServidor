  </div>
</div>
<!-- essas tags são o fechamento do conteudo 
a aberturas dessas tags foi realizada na side bar -->

<footer>
  <!-- Verificar o que pode ser inserido no rodapé do sistema -->
</footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://<?php echo APP_HOST; ?>/node_modules/jquery/dist/jquery.js"></script>
  <script src="http://<?php echo APP_HOST; ?>/node_modules/popper.js/dist/popper.js"></script>
  <script src="http://<?php echo APP_HOST; ?>/node_modules/bootstrap/dist/js/bootstrap.js"></script>
  <script src="http://<?php echo APP_HOST; ?>/public/js/sidebar.js"></script>
  <script src="http://<?php echo APP_HOST; ?>/public/js/formulario.js"></script>
  <script src="http://<?php echo APP_HOST; ?>/public/js/datatable.js"></script>
  <script src="http://<?php echo APP_HOST; ?>/public/js/kanban.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  


  
<script>
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

</script>



</body>
</html>