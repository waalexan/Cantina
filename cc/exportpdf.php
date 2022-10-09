<script>
  function downloadPDF() {
  const item = document.querySelector(".Content");

  var opt = {
    margin: 1,
    filename: "<?= "Relatorio ".date("d-m-Y")?>.pdf",
    html2canvas: { scale: 2 },
    jsPDF: { unit: "in", format: "letter", orientation: "portrait" },
  };

  html2pdf().set(opt).from(item).save();
}
</script>