// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable();
});

// Simple initialisation:
new DataTable('#myTable', {
    layout: {
        topStart: 'searchPanes'
    }
});

// Or, with configuration options:
new DataTable('#myTable', {
    layout: {
        topStart: {
            searchPanes: {
                // config options here
            }
        }
    }
});
