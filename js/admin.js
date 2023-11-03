function openTab(tabName) {
    var i, tabContent;
    tabContent = document.getElementsByClassName("tab");
    for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }
    document.getElementById(tabName).style.display = "block";
}

function exportAllToExcel() {
    // Отправляем AJAX-запрос на серверный PHP файл
    $.ajax({
      url: '../php/',
      method: 'POST',
      success: function(response) {
        // При успешном ответе от сервера, создаем ссылку для скачивания файла Excel
        var link = document.createElement('a');
        link.href = 'data:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet;base64,' + response;
        link.download = 'table.xlsx';
        link.click();
      },
      error: function(xhr, status, error) {
        console.log('Error:', error);
      }
    });
  }