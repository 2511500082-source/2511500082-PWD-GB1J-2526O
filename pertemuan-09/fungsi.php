<?php foreach ($fieldConfig as $kunci => $metadata): ?>
    <p>
        <strong><?= $metadata['label'] ?>:</strong>
        <?= htmlspecialchars((string) ($biodata[$kunci] ?? "")) ?>
        <?= $metadata['suffix'] ?>
    </p>
<?php endforeach; ?>

function formatTanggal($tgl)
{
return date("d M Y", strtotime($tgl));
}

function tampilkanBiodata($conf, $arr)
{
$html = "";
foreach ($conf as $k => $v) {
$label = $v["label"];
$nilai = bersihkan($arr[$k] ?? '');
$suffix = $v["suffix"];
$html .= "<p><strong>{$label}</strong> {$nilai}{$suffix}</p>";
}
return $html;
}