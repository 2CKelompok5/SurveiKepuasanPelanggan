</div>
  </div>

  <script>
    document.getElementById('sidebarToggle').addEventListener('click', function() {
      var sidebar = document.getElementById('sidebar');
      var content = document.getElementById('content');
      if (sidebar.classList.contains('sidebar-visible')) {
        sidebar.classList.remove('sidebar-visible');
        sidebar.classList.add('sidebar-hidden');
        content.classList.remove('content-shift');
      } else {
        sidebar.classList.remove('sidebar-hidden');
        sidebar.classList.add('sidebar-visible');
        content.classList.add('content-shift');
      }
    });
  </script>

</body>
</html>
