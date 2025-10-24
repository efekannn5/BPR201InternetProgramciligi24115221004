<?php /* admin/_head.php - ortak head */ ?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EnHaber Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    :root{
      --eh-bg:#f1f4f9;
      --eh-navy:#0a192f;
      --eh-navy-2:#1b263b;
      --eh-accent:#3b82f6; /* mavi */
      --eh-accent-2:#22c55e; /* yeşil */
      --eh-text:#0f172a;
    }
    body{ background:var(--eh-bg); color:var(--eh-text); }
    .eh-sidebar{
      position: fixed; top:0; left:0; bottom:0; width:240px;
      background:var(--eh-navy); color:#e5e7eb; padding:18px 14px;
    }
    .eh-brand{ color:#fff; text-decoration:none; font-weight:700; letter-spacing:.2px; }
    .eh-nav a{
      color:#cdd6e6; text-decoration:none; display:block; padding:10px 10px; border-radius:8px;
    }
    .eh-nav a:hover, .eh-nav a.active{ background:var(--eh-navy-2); color:#fff; }
    .eh-content{ margin-left:240px; min-height:100vh; }
    .eh-topbar{
      position:sticky; top:0; z-index:20; background:#fff; border-bottom:1px solid #e5e7eb;
    }
    .eh-card{ background:#fff; border:1px solid #eaecef; border-radius:14px; }
    .eh-badge{ font-size:.75rem; padding:.25rem .5rem; border-radius:9999px; }
    .eh-progress{ height:8px; background:#e5e7eb; border-radius:9999px; overflow:hidden; }
    .eh-progress > div{ height:100%; background:var(--eh-accent); }
    .table thead th{ color:#64748b; font-weight:600; }
    .eh-kpi{ display:flex; align-items:center; gap:12px; }
    .eh-kpi i{ font-size:1.2rem; color:var(--eh-accent); }
    @media (max-width: 991px){
      .eh-sidebar{ transform:translateX(-100%); transition:transform .2s; }
      .eh-sidebar.show{ transform:none; }
      .eh-content{ margin-left:0; }
    }
  </style>
</head>
<body>
