<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="bootstrap-dynamic-tabs.css">
  <script src="bootstrap-dynamic-tabs.js"></script>
  
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg fixed-top navbar-light" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="membership-home.php"><img
                    class="logo"
                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzNjAiIGhlaWdodD0iMTAwIiB2aWV3Qm94PSIwIDAgMzYwIDEwMCI+CiAgICA8ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxwYXRoIGZpbGw9IiMwMDhGRkUiIGQ9Ik01LjY2NyA1MC4yNWwtLjAxNy0uMDQzYy4yOS0uNzMuNjAzLTEuNDU2Ljk0LTIuMTg0IDEuNTk2LTMuNDMgMy43MjQtNi44MjcgNi4zMzQtMTAuMDc1YTcxLjQ3NiA3MS40NzYgMCAwIDAtMS4wMzYgMTAuNDczIDM0LjYzNiAzNC42MzYgMCAwIDAgMCAzLjY1N2MuMDkyIDMuNTk5LjQ0NyA3LjEwMyAxLjAzNiAxMC40NzMtMi42MS0zLjI0OS00LjczOC02LjY0NC02LjMzMy0xMC4wNzZhNDEuNTQ0IDQxLjU0NCAwIDAgMS0uOTQtMi4xODRsLjAxNi0uMDQxem05LjM4OSAwYTMxLjcwNiAzMS43MDYgMCAwIDEgNC4yNy0xNS45MDUgMzEuNjUxIDMxLjY1MSAwIDAgMSAxMC44NjItMTEuMTg3bC0uMDIzLS4wNGEzMi4wMjQgMzIuMDI0IDAgMCAxIDE3LjE5Ni00Ljc2MSAzMS42NzQgMzEuNjc0IDAgMCAxIDE1LjQ4MiA0LjI3MSAzMi4wNTIgMzIuMDUyIDAgMCAxIDUuNDE3IDMuOTMzYzMuNTQ0IDMuMTkgNS4yNDMgNy44NjYgMTAuNzY4IDcuNjcgMy4yMDItLjExNiA2LjM2NS0yLjAzNyA3LjcwMy01LjExOCA0LjM2OC0xMC4wNDUtOS40MS0xNi4xNy0xNy40Ni0xNy42MTNhNDAuOTYgNDAuOTYgMCAwIDAtMS42ODEtMS44NzNDNjEuNzk2IDMuNTY5IDU0LjY1OCAwIDQ2LjkxNiAwIDM4LjMwMiAwIDMwLjQzOCA0LjQxMiAyNC4zNSAxMS43NDhsLjIxMi0uMjU0QzE1LjMxIDEzLjE1IDcuNjg4IDE3LjczNCAzLjQzIDI1LjExNS0uODMyIDMyLjUtLjk4NiA0MS40MDMgMi4yMTQgNTAuMjUtLjk4NiA1OS4wOTYtLjgzMiA2OCAzLjQzIDc1LjM4M2M0LjI1OCA3LjM4MiAxMS44OCAxMS45NjcgMjEuMTMyIDEzLjYyMWwtLjIxMi0uMjUzYzYuMDg4IDcuMzM2IDEzLjk1MiAxMS43NDggMjIuNTY2IDExLjc0OCA3Ljc0MiAwIDE0Ljg4LTMuNTcgMjAuNjc0LTkuNjI3LjU3My0uNiAxLjEzNC0xLjIyNSAxLjY4MS0xLjg3MyA4LjA1LTEuNDQzIDIxLjgyOC03LjU2OCAxNy40Ni0xNy42MTMtMS4zMzgtMy4wODEtNC41LTUuMDAzLTcuNzAzLTUuMTE3LTUuNTI1LS4xOTctNy4yMjQgNC40NzgtMTAuNzY4IDcuNjY4YTMyLjA3IDMyLjA3IDAgMCAxLTUuNDE3IDMuOTM0IDMxLjY3NyAzMS42NzcgMCAwIDEtMTUuNDgyIDQuMjcgMzIuMDIxIDMyLjAyMSAwIDAgMS0xNy4xOTYtNC43NmwuMDI0LS4wNGEzMS42NTMgMzEuNjUzIDAgMCAxLTEwLjg2My0xMS4xODcgMzEuNzA0IDMxLjcwNCAwIDAgMS00LjI3LTE1LjkwNHptNjguNDkzIDI3Ljc0NGMuNTY4LTEuMzMuNzg4LTIuNzkzLjU4Ni00LjE0MS0uMzQzLTIuMjk1LTEuODYxLTMuODEzLTQuMTU1LTQuMTU2YTYuODIgNi44MiAwIDAgMC0uNy0uMDY2Yy0xLjY3NiA1Ljc2MS00LjA3OCAxMC45NzgtNy4wNCAxNS40MTIgMy41OTUtMS4wMjIgOS42Ny0zLjIyIDExLjMwOS03LjA1ek00LjE2NSA1NC44MTNjMi40MyA0LjkyIDUuODggOS43NDIgMTAuMjE0IDE0LjE4IDEuNjgzIDYuMDI3IDQuMTUgMTEuNDc0IDcuMjI1IDE2LjA3M2wtLjAyLS4wMjljLTYuMzk4LTEuNzg1LTExLjk3NS01LjM0My0xNS4zODYtMTEuMjUtMy40MTEtNS45MDktMy42OTYtMTIuNTI4LTIuMDMzLTE4Ljk3NHptMTUuMDUyIDE4LjY2YTcxLjAwOCA3MS4wMDggMCAwIDAgNy43NjMgNS42NTIgMzQuOTA4IDM0LjkwOCAwIDAgMCAzLjE3IDEuOTQ1bC4wMi4wMTIuMTE0LjA2NC43NTMuNDE0LjA1MS4wMjguMDk2LjA1Mi4wNjQuMDM0LjA4My4wNDUuMDc4LjA0Mi4wNy4wMzguMDkuMDQ4LjA1OC4wMy4xMDQuMDU3LjA0NC4wMjIuMTE3LjA2My4wMy4wMTUuMTMxLjA3LjAxNy4wMDguMTQ2LjA3NS4wMDIuMDAyLjE0OS4wNzYuMDEuMDA2LjEzOC4wNzEuMDIzLjAxMi4xMjUuMDY0LjAzNi4wMi4xMTIuMDU1LjA1LjAyNi4wOTkuMDUuMDYzLjAzMi4wODUuMDQzLjA3Ny4wMzkuMDcxLjAzNS4wOS4wNDQuMDU5LjAzLjEwMy4wNTEuMDQ1LjAyMi4xMTguMDU4LjAzLjAxNi4xMzIuMDY0LjAxOC4wMDguMTQzLjA3LjAwNS4wMDMuMTUuMDcyLjAwOC4wMDQuMTQuMDY4LjAyMS4wMS4xMjguMDYuMDM1LjAxOC4xMTQuMDUzLjA0OC4wMjQuMS4wNDcuMDYyLjAyOS4wODcuMDQxLjA3Ni4wMzUuMDczLjAzNC4wOS4wNDIuMDYuMDI4LjEwMi4wNDcuMDQ2LjAyMS4xMTYuMDU0LjAzNC4wMTUuMTI5LjA2LjAyLjAwNy4xNDIuMDY2LjAwNy4wMDMuMTQ5LjA2Ni4wMDcuMDA0LjE0Mi4wNjMuMDIuMDEuMTMuMDU3LjAzNC4wMTUuMTE1LjA1MS4wNDcuMDIuMTAyLjA0Ni4wNjEuMDI2LjA4OC4wNC4wNzUuMDMuMDc1LjAzNC4wODguMDM3LjA2Mi4wMjcuMS4wNDQuMDQ5LjAyLjExNS4wNDkuMDM0LjAxNS4xMjkuMDUzLjAyMi4wMS4xNC4wNi4wMDkuMDAzLjI5OC4xMjQuMDIuMDA4LjEzLjA1NC4wMzMuMDEzLjExNy4wNDguMDQ2LjAxOS4xMDMuMDQyLjA2LjAyMy4wOS4wMzcuMDc0LjAzLjA3Ni4wMy4wODYuMDM1LjA2NC4wMjUuMS4wNC4wNS4wMTkuMTEzLjA0NS4wMzYuMDE0LjEyNy4wNS4wMjMuMDA4LjE0LjA1NS4wMS4wMDQuMTUuMDU3LjAwNC4wMDIuMTQ2LjA1NS4wMTcuMDA3LjEzMi4wNS4wMy4wMTIuMTIuMDQ0LjA0NS4wMTcuMTA1LjA0LjA1OC4wMjIuMDkxLjAzMy4wNzIuMDI3LjA3OC4wMjkuMDg1LjAzMS4wNjUuMDIzYy00LjcxNi43MTEtOS42NDIuODI0LTE0LjMyMi4xNDFhMzkuODk4IDM5Ljg5OCAwIDAgMS0xLjQ0Ni0xLjkzN2MtMi4xODgtMy4xMTgtNC4wNzQtNi42ODctNS41OS0xMC42MDV6bTM5LjYyNiA5Ljc3NXptLjY4NS0uMjU3YTM1LjEyNCAzNS4xMjQgMCAwIDAgNC45MTctMi4zNTMgNzAuOSA3MC45IDAgMCAxLTExLjIxNCA1LjIzOGMzLjMzOC41MTcgNi42LjcxMyA5LjcyMy41OTFhNDIuOCA0Mi44IDAgMCAwIDQuNjA1LS40MjVjMy40MjctNC4zMTQgNi4yMjYtOS42NzEgOC4xNzEtMTUuNzRsLS40MjMuNTU2YTM0Ljg4NCAzNC44ODQgMCAwIDEtMTAuODY4IDkuNzggMzQuODc2IDM0Ljg3NiAwIDAgMS00LjkxMSAyLjM1M3ptLTEyLjYzNSA0Ljg0M2MtNi4wMiAxLjUzNC0xMS45NDQgMi4xMi0xNy40MDggMS43NjUgNS4wMTYgNC44NjEgMTEuMDEgNy42OTMgMTcuNDMgNy42OTMgNi40MjkgMCAxMi40MjctMi44MzUgMTcuNDQtNy42OTlsLTEuMjg5LjA2N2MtNS4xMjUuMTk3LTEwLjYwNi0uNDAxLTE2LjE3My0xLjgyNnptMzYuNjU2LTY1LjMzYy41NjggMS4zMy43ODggMi43OTQuNTg2IDQuMTQyLS4zNDMgMi4yOTQtMS44NjEgMy44MTMtNC4xNTUgNC4xNTUtLjIzLjAzNS0uNDY0LjA1Ny0uNy4wNjctMS42NzYtNS43NjEtNC4wNzgtMTAuOTc4LTcuMDQtMTUuNDEyIDMuNTk1IDEuMDIyIDkuNjcgMy4yMiAxMS4zMDkgNy4wNDl6TTQuMTY1IDQ1LjY4N2MyLjQzLTQuOTIgNS44OC05Ljc0MiAxMC4yMTQtMTQuMTggMS42ODMtNi4wMjcgNC4xNS0xMS40NzQgNy4yMjUtMTYuMDczbC0uMDIuMDI4QzE1LjE4NyAxNy4yNDcgOS42MSAyMC44MDQgNi4xOTkgMjYuNzEyIDIuNzg3IDMyLjYyMSAyLjUwMiAzOS4yNCA0LjE2NSA0NS42ODZ6bTE1LjA1Mi0xOC42NmE3MC45MTYgNzAuOTE2IDAgMCAxIDcuNzYzLTUuNjUyIDM0Ljc3MyAzNC43NzMgMCAwIDEgMy4xNy0xLjk0NWwuMDItLjAxMi4xMTQtLjA2NC43NTMtLjQxNC4wNTEtLjAyOS4wOTYtLjA1MS4wNjQtLjAzNS4wODMtLjA0NS4wNzgtLjA0Mi4wNy0uMDM4LjA5LS4wNDguMDU4LS4wMy4xMDQtLjA1Ni4wNDQtLjAyMi4xMTctLjA2My4wMy0uMDE1LjEzMS0uMDcuMDE3LS4wMDguMTQ2LS4wNzZoLjAwMmwuMTQ5LS4wNzguMDEtLjAwNi4xMzgtLjA3LjAyMy0uMDEyLjEyNS0uMDY0LjAzNi0uMDIuMTEyLS4wNTUuMDUtLjAyNi4wOTktLjA1LjA2My0uMDMyLjA4NS0uMDQzLjA3Ny0uMDM5LjA3MS0uMDM2LjA5LS4wNDQuMDU5LS4wMy4xMDMtLjA1LjA0NS0uMDIyLjExOC0uMDU4LjAzLS4wMTYuMTMyLS4wNjQuMDE4LS4wMDkuMTQzLS4wNy4wMDUtLjAwMi4xNS0uMDcyLjAwOC0uMDA0LjE0LS4wNjguMDIxLS4wMS4xMjgtLjA2LjAzNS0uMDE4LjExNC0uMDU0LjA0OC0uMDIzLjEtLjA0Ny4wNjItLjAyOS4wODctLjA0MS4wNzYtLjAzNS4wNzMtLjAzNS4wOS0uMDQuMDYtLjAzLjEwMi0uMDQ2LjA0Ni0uMDIyLjExNi0uMDUzLjAzNC0uMDE1LjEyOS0uMDYuMDItLjAwOC4xNDItLjA2NS4wMDctLjAwMy4xNDktLjA2Ny4wMDctLjAwMy4xNDItLjA2NC4wMi0uMDA5LjEzLS4wNTcuMDM0LS4wMTUuMTE1LS4wNTEuMDQ3LS4wMi4xMDItLjA0Ni4wNjEtLjAyNi4wODgtLjA0LjA3NS0uMDMxLjA3NS0uMDMzLjA4OC0uMDM3LjA2Mi0uMDI3LjEtLjA0NC4wNDktLjAyLjExNS0uMDUuMDM0LS4wMTQuMTI5LS4wNTQuMDIyLS4wMS4xNC0uMDU4LjAwOS0uMDA0LjI5OC0uMTI0LjAyLS4wMDguMTMtLjA1NS4wMzMtLjAxMi4xMTctLjA0OC4wNDYtLjAxOS4xMDMtLjA0Mi4wNi0uMDI0LjA5LS4wMzYuMDc0LS4wMy4wNzYtLjAzLjA4Ni0uMDM1LjA2NC0uMDI1LjEtLjA0LjA1LS4wMi4xMTMtLjA0NC4wMzYtLjAxNC4xMjctLjA1LjAyMy0uMDA4LjE0LS4wNTUuMDEtLjAwNC4xNS0uMDU4LjAwNC0uMDAxLjE0Ni0uMDU2LjAxNy0uMDA2LjEzMi0uMDUuMDMtLjAxMi4xMi0uMDQ1LjA0NS0uMDE3LjEwNS0uMDM5LjA1OC0uMDIyLjA5MS0uMDM0LjA3Mi0uMDI2LjA3OC0uMDI5LjA4NS0uMDMxLjA2NS0uMDI0Yy00LjcxNi0uNzEtOS42NDItLjgyMy0xNC4zMjItLjE0LS40OTcuNjI1LS45NzkgMS4yNy0xLjQ0NiAxLjkzNy0yLjE4OCAzLjExOC00LjA3NCA2LjY4Ny01LjU5IDEwLjYwNXptMzkuNjI2LTkuNzc1em0uNjg1LjI1N2EzNS4xNTggMzUuMTU4IDAgMCAxIDQuOTE3IDIuMzUzIDcwLjkxIDcwLjkxIDAgMCAwLTExLjIxNC01LjIzOWMzLjMzOC0uNTE2IDYuNi0uNzEyIDkuNzIzLS41OWE0Mi44IDQyLjggMCAwIDEgNC42MDUuNDI1YzMuNDI3IDQuMzE0IDYuMjI2IDkuNjcxIDguMTcxIDE1LjczOWwtLjQyMy0uNTU2YTM0Ljg3MyAzNC44NzMgMCAwIDAtMTAuODY4LTkuNzggMzQuODc2IDM0Ljg3NiAwIDAgMC00LjkxMS0yLjM1MnptLTEyLjYzNS00Ljg0NGMtNi4wMi0xLjUzNC0xMS45NDQtMi4xMi0xNy40MDgtMS43NjQgNS4wMTYtNC44NjEgMTEuMDEtNy42OTMgMTcuNDMtNy42OTMgNi40MjkgMCAxMi40MjcgMi44MzUgMTcuNDQgNy42OTlsLTEuMjg5LS4wNjhjLTUuMTI1LS4xOTYtMTAuNjA2LjQwMi0xNi4xNzMgMS44MjZ6Ii8+CiAgICAgICAgPHBhdGggZmlsbD0iIzJGMzEzMyIgZD0iTTE1Ny4yMDEgNjMuNjIzbC0yLjczNi0yLjY4M2MtMS43NTQgMS42ODMtMy41NDMgMi45OS01LjM2NyAzLjkyLTEuODI0LjkyOS0zLjk5OSAxLjM5NC02LjUyNCAxLjM5NC0yLjAzNSAwLTMuOTItLjM5NS01LjY1Ny0xLjE4NGExNC4xNTYgMTQuMTU2IDAgMCAxLTQuNTI1LTMuMjM2Yy0xLjI4LTEuMzY4LTIuMjgtMi45ODItMy00Ljg0LS43MTgtMS44Ni0xLjA3OC0zLjg2LTEuMDc4LTZzLjM2LTQuMTMgMS4wNzktNS45NzFjLjcyLTEuODQyIDEuNzE5LTMuNDQ3IDMtNC44MTVhMTMuODE5IDEzLjgxOSAwIDAgMSA0LjUyNC0zLjIxYzEuNzM3LS43NzEgMy42MjItMS4xNTcgNS42NTctMS4xNTcgMi41MjUgMCA0LjY5MS40NzMgNi40OTggMS40MmEyMy4yNzcgMjMuMjc3IDAgMCAxIDUuMDc3IDMuNjMxbDIuODQyLTMuMDUyYTI3LjcyNCAyNy43MjQgMCAwIDAtMi44NDItMi4zOTQgMTYuOTM2IDE2LjkzNiAwIDAgMC0zLjIxLTEuODQxIDE4LjgzNyAxOC44MzcgMCAwIDAtMy43NjEtMS4xODRjLTEuMzUtLjI4MS0yLjg2OC0uNDIxLTQuNTUyLS40MjEtMi43IDAtNS4xOTEuNS03LjQ3MSAxLjUtMi4yOCAxLTQuMjQ1IDIuMzY3LTUuODk0IDQuMTAzLTEuNjQ4IDEuNzM3LTIuOTM3IDMuNzYzLTMuODY3IDYuMDc4LS45MyAyLjMxNS0xLjM5NCA0Ljc4OC0xLjM5NCA3LjQxOSAwIDIuNjY2LjQ2NSA1LjE1NiAxLjM5NCA3LjQ3Mi45MyAyLjMxNSAyLjIxOSA0LjMyMyAzLjg2NyA2LjAyNCAxLjY0OSAxLjcwMSAzLjU5NiAzLjA0MyA1Ljg0MSA0LjAyNSAyLjI0NS45ODMgNC43IDEuNDc0IDcuMzY3IDEuNDc0IDEuNjgzIDAgMy4yMS0uMTU4IDQuNTc3LS40NzRhMTkuMDQzIDE5LjA0MyAwIDAgMCAzLjg0MS0xLjMxNSAxOC40MyAxOC40MyAwIDAgMCAzLjM0Mi0yLjAyNiAyNi4yMSAyNi4yMSAwIDAgMCAyLjk3Mi0yLjY1N3ptMTUuMDE4LTMwLjk5MnYzNi44MzJoNC4xNTdWMzIuNjMxaC00LjE1N3ptMzYuMjIzIDMuODQxaDEyLjM2NXYtMy44NEgxOTEuOTJ2My44NGgxMi4zNjV2MzIuOTkxaDQuMTU3di0zMi45OXptNDAuMzc5LTQuMTA0aC0zLjg5NGwtMTYuNzg1IDM3LjA5NWg0LjI2Mmw0LjM2Ny05LjczNGgyMC4wNDdsNC4zMTUgOS43MzRoNC40NzNMMjQ4LjgyIDMyLjM2OHptNi4zNjYgMjMuNjc4aC0xNi43ODVsOC40MTktMTguNzg1IDguMzY2IDE4Ljc4NXptNTIuMTY2IDYuMTA0TDI4NC4xNDggMzIuNjNoLTMuODkzdjM2LjgzMmg0LjA1MlYzOS4yNjFsMjMuNzgyIDMwLjIwMmgzLjMxNVYzMi42MzFoLTQuMDUxVjYyLjE1em00NC4wMS0yNS44MzZsLTIzLjgzNiAzMC4zNnYyLjc5aDI5LjUxOFY2NS43OGgtMjMuODg4bDIzLjg4OC0zMC4zNnYtMi43ODloLTI4LjcyOHYzLjY4M2gyMy4wNDZ6Ii8+CiAgICA8L2c+Cjwvc3ZnPgo="
                    alt="logo"
            ></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto align-middle">
                <li class="nav-item">
                    <a class="nav-link links" href="membership-home.php">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link links" href="#">Our Team</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link links current" href="EventCalendar.php">Events <span class="sr-only">(current)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link links" href="#">Jobs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="images\login-avatar-small.png"
                             alt="login-avatar">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
  
  
    
    <div class="container" id="maincontainer">

        <div class="row" id="bannerrow">

            <div class="card mb-5 mt-5 pt-4" >
               
            <div class="row no-gutters">
                    <div class="col-lg-8">
                        <img src="https://www.gelsi.com/foto/catering/slide2.jpg" class="card-img" alt="...">
                    </div>
            <div class="col-lg-4" id="importantMainBanner">
                <div class="card-body mt-4">
                    <h1 class="card-title pt-5" id="maintitle"></h1>
                    <p class="card-text" id="starttime"></p>
                    
                </div>
            </div>
            </div>
         </div>
    </div>

    <div class="row m-1" id="bodyrow">
        <div class="container col-lg-7 ml-1 border border-grey rounded-lg" id="descriptiondiv">
        <br>
            <h2 class="m-1">Details</h2>
            
            <br>
            <br>
            <div class="row m-1" >
                <p id="detailsdesc"> 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac consectetur purus. Maecenas pellentesque nisi libero, facilisis feugiat dolor semper vitae. Sed dignissim, lorem vel dictum hendrerit, metus risus commodo ligula, ut posuere elit diam eu lorem. Nulla vel diam et ex porta dapibus tempus eu lacus. Integer facilisis purus sed massa scelerisque varius. Cras at orci dapibus, mollis magna at, aliquam nisi. Curabitur at nibh a ex gravida fringilla in sed erat. Phasellus congue fringilla elit, id sagittis ipsum volutpat pretium. Fusce convallis dapibus justo, vitae iaculis neque varius vel.
                Phasellus rutrum nulla enim, ut rhoncus enim pellentesque
                <br>
                <br>
                sit amet. Suspendisse a augue eu erat fermentum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam sed facilisis ante. Nulla id leo odio. Quisque vehicula quis tellus eu mattis. Etiam risus ante, molestie sit amet efficitur et, tristique nec lectus. Donec id suscipit metus. 
                Orci varius natoque penatibus e
                <br>
                <br>
                t magnis dis parturient montes, nascetur ridiculus mus. Suspendisse ultricies iaculis nunc, quis tempor ligula. Fusce aliquet mattis ligula tempus imperdiet. Nulla et nulla tempus, semper leo eu, suscipit purus. Etiam facilisis eros est, vel ultricies mi porta eu. Praesent interdum feugiat mollis. Praesent dapibus malesuada ex, id aliquet tellus commodo nec. Sed vitae convallis velit, sed dictum metus. Donec venenatis purus eget mauris tempus, eget porta neque ultricies. Vivamus nunc nisl, imperdiet at felis eu, efficitur fermentum felis. In hac habitasse platea dictumst. Vestibulum vitae lectus eget ante lacinia tempor suscipit in justo. Sed pharetra odio quis nunc volutpat, vel tincidunt ante dignissim. Aliquam laoreet leo eu felis tristique sodales.
                Nam dignissim velit metus, quis tincidunt dui suscipit sit amet. 
                <br>
                <br>
                Suspendisse dignissim turpis nibh, quis sodales leo efficitur non. Cras ipsum metus, pulvinar et lacus sed, semper scelerisque sapien. Aliquam urna mi, elementum vel scelerisque at, efficitur non enim. Morbi iaculis rutrum ante et venenatis. In ac euismod tellus. Etiam et quam lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc in ante arcu. Praesent quis dictum dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; 
                </p>
                <br>
                <br>
            </div>
            
            
            <nav class="nav nav-pills flex-column flex-sm-row">
                
                <a class="flex-sm-fill text-sm-center nav-link active" href="">Attendees</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="">Agenda</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="">Speaker</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="">Sponsor</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="">Additional Information</a>
            </nav>
            <hr>

            <div class="row"> 

              <figure class="figure ml-5">
                <img src="./images/avatar-small2.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                <figcaption class="figure-caption mx-auto text-sm-center">Sally M.</figcaption>
                
              </figure>

              <figure class="figure ml-5">
                <img src="./images/avatar-small3.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                <figcaption class="figure-caption mx-auto text-sm-center">Zong S.</figcaption>
                
              </figure>
            
     
            </div>
            

            
        </div>

        <div class="container col-lg-4" id="details">
        <div class="row">
            <h5>Hosted By</h5>
        </div>    
        <div class="row">
            <img src="./images/avatar-small2.png">
            <p class="mt-4 mx-3">Sally McGuire</p>
        </div>

        <div class="d-flex justify-content-center mt-5 mb-5 center">

          <button type="button" class="btn btn-primary btn-md px-4 mx-3" id="attendButton">Attend</button>
          <button type="button" class="btn btn-secondary btn-md px-4 mx-3" id="attendShare">Share</button>
        </div>


        <div class="row" >
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11990.863553199022!2d174.78377079999999!3d-41.29328745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snz!4v1575865867921!5m2!1sen!2snz" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>

        <div class="row">
        
            <p class="mt-3" id="mainaddress"></p>
        </div>

        
        <div class="row">

        <h5>Related Events</h5>

            <div class="card mb-3 col-lg-12" id="card1">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src=".\images\interest-groups3.png" class="card-img pt-5" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title" id="card-title1"></h5>
                            <p class="card-text" id="card-text1"></p>
                            <p class="card-text" id="card-texti1"><small class="text-muted"></small></p>
                            <p class="card-text" id="card-id1"></p>
                        </div>
                    </div>
                    </div>
                </div>
            

                <div class="card mb-3 col-lg-12" id="card2">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src=".\images\interest-groups1.png" class="card-img pt-5" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title" id="card-title2"></h5>
                            <p class="card-text" id="card-text2"></p>
                            <p class="card-text" id="card-texti2"><small class="text-muted"></small></p>
                            <p class="card-text" id="card-id2"></p>
                        </div>
                    </div>
                    </div>
                </div>
            

                <div class="card mb-3 col-lg-12" id="card3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src=".\images\interest-groups2.png" class="card-img pt-4" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title" id="card-title3"></h5>
                            <p class="card-text" id="card-text3"></p>
                            <p class="card-text" id="card-texti3"><small class="text-muted"></small></p>
                            <p class="card-text" id="card-id3"></p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>    
        

        </div>
    </div>


  

</div> <!--UNSURE WhAT THIS LINKS TO -->
<footer class="footer">
      <div class="container footer-wrap">
        <div class="row">
          <div class="col-lg-4 lg-md-4 col-sm-12 align-self-center">
            <a class="logo-white" href="#"><img
                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzNjAiIGhlaWdodD0iMTAwIiB2aWV3Qm94PSIwIDAgMzYwIDEwMCI+CiAgICA8ZyBmaWxsPSIjRkZGIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxwYXRoIGQ9Ik01LjY2NyA1MC4yNWwtLjAxNy0uMDQzYy4yOS0uNzMuNjAzLTEuNDU2Ljk0LTIuMTg0IDEuNTk2LTMuNDMgMy43MjQtNi44MjcgNi4zMzQtMTAuMDc1YTcxLjQ3NiA3MS40NzYgMCAwIDAtMS4wMzYgMTAuNDczIDM0LjYzNiAzNC42MzYgMCAwIDAgMCAzLjY1N2MuMDkyIDMuNTk5LjQ0NyA3LjEwMyAxLjAzNiAxMC40NzMtMi42MS0zLjI0OS00LjczOC02LjY0NC02LjMzMy0xMC4wNzZhNDEuNTQ0IDQxLjU0NCAwIDAgMS0uOTQtMi4xODRsLjAxNi0uMDQxem05LjM4OSAwYTMxLjcwNiAzMS43MDYgMCAwIDEgNC4yNy0xNS45MDUgMzEuNjUxIDMxLjY1MSAwIDAgMSAxMC44NjItMTEuMTg3bC0uMDIzLS4wNGEzMi4wMjQgMzIuMDI0IDAgMCAxIDE3LjE5Ni00Ljc2MSAzMS42NzQgMzEuNjc0IDAgMCAxIDE1LjQ4MiA0LjI3MSAzMi4wNTIgMzIuMDUyIDAgMCAxIDUuNDE3IDMuOTMzYzMuNTQ0IDMuMTkgNS4yNDMgNy44NjYgMTAuNzY4IDcuNjcgMy4yMDItLjExNiA2LjM2NS0yLjAzNyA3LjcwMy01LjExOCA0LjM2OC0xMC4wNDUtOS40MS0xNi4xNy0xNy40Ni0xNy42MTNhNDAuOTYgNDAuOTYgMCAwIDAtMS42ODEtMS44NzNDNjEuNzk2IDMuNTY5IDU0LjY1OCAwIDQ2LjkxNiAwIDM4LjMwMiAwIDMwLjQzOCA0LjQxMiAyNC4zNSAxMS43NDhsLjIxMi0uMjU0QzE1LjMxIDEzLjE1IDcuNjg4IDE3LjczNCAzLjQzIDI1LjExNS0uODMyIDMyLjUtLjk4NiA0MS40MDMgMi4yMTQgNTAuMjUtLjk4NiA1OS4wOTYtLjgzMiA2OCAzLjQzIDc1LjM4M2M0LjI1OCA3LjM4MiAxMS44OCAxMS45NjcgMjEuMTMyIDEzLjYyMWwtLjIxMi0uMjUzYzYuMDg4IDcuMzM2IDEzLjk1MiAxMS43NDggMjIuNTY2IDExLjc0OCA3Ljc0MiAwIDE0Ljg4LTMuNTcgMjAuNjc0LTkuNjI3LjU3My0uNiAxLjEzNC0xLjIyNSAxLjY4MS0xLjg3MyA4LjA1LTEuNDQzIDIxLjgyOC03LjU2OCAxNy40Ni0xNy42MTMtMS4zMzgtMy4wODEtNC41LTUuMDAzLTcuNzAzLTUuMTE3LTUuNTI1LS4xOTctNy4yMjQgNC40NzgtMTAuNzY4IDcuNjY4YTMyLjA3IDMyLjA3IDAgMCAxLTUuNDE3IDMuOTM0IDMxLjY3NyAzMS42NzcgMCAwIDEtMTUuNDgyIDQuMjcgMzIuMDIxIDMyLjAyMSAwIDAgMS0xNy4xOTYtNC43NmwuMDI0LS4wNGEzMS42NTMgMzEuNjUzIDAgMCAxLTEwLjg2My0xMS4xODcgMzEuNzA0IDMxLjcwNCAwIDAgMS00LjI3LTE1LjkwNHptNjguNDkzIDI3Ljc0NGMuNTY4LTEuMzMuNzg4LTIuNzkzLjU4Ni00LjE0MS0uMzQzLTIuMjk1LTEuODYxLTMuODEzLTQuMTU1LTQuMTU2YTYuODIgNi44MiAwIDAgMC0uNy0uMDY2Yy0xLjY3NiA1Ljc2MS00LjA3OCAxMC45NzgtNy4wNCAxNS40MTIgMy41OTUtMS4wMjIgOS42Ny0zLjIyIDExLjMwOS03LjA1ek00LjE2NSA1NC44MTNjMi40MyA0LjkyIDUuODggOS43NDIgMTAuMjE0IDE0LjE4IDEuNjgzIDYuMDI3IDQuMTUgMTEuNDc0IDcuMjI1IDE2LjA3M2wtLjAyLS4wMjljLTYuMzk4LTEuNzg1LTExLjk3NS01LjM0My0xNS4zODYtMTEuMjUtMy40MTEtNS45MDktMy42OTYtMTIuNTI4LTIuMDMzLTE4Ljk3NHptMTUuMDUyIDE4LjY2YTcxLjAwOCA3MS4wMDggMCAwIDAgNy43NjMgNS42NTIgMzQuOTA4IDM0LjkwOCAwIDAgMCAzLjE3IDEuOTQ1bC4wMi4wMTIuMTE0LjA2NC43NTMuNDE0LjA1MS4wMjguMDk2LjA1Mi4wNjQuMDM0LjA4My4wNDUuMDc4LjA0Mi4wNy4wMzguMDkuMDQ4LjA1OC4wMy4xMDQuMDU3LjA0NC4wMjIuMTE3LjA2My4wMy4wMTUuMTMxLjA3LjAxNy4wMDguMTQ2LjA3NS4wMDIuMDAyLjE0OS4wNzYuMDEuMDA2LjEzOC4wNzEuMDIzLjAxMi4xMjUuMDY0LjAzNi4wMi4xMTIuMDU1LjA1LjAyNi4wOTkuMDUuMDYzLjAzMi4wODUuMDQzLjA3Ny4wMzkuMDcxLjAzNS4wOS4wNDQuMDU5LjAzLjEwMy4wNTEuMDQ1LjAyMi4xMTguMDU4LjAzLjAxNi4xMzIuMDY0LjAxOC4wMDguMTQzLjA3LjAwNS4wMDMuMTUuMDcyLjAwOC4wMDQuMTQuMDY4LjAyMS4wMS4xMjguMDYuMDM1LjAxOC4xMTQuMDUzLjA0OC4wMjQuMS4wNDcuMDYyLjAyOS4wODcuMDQxLjA3Ni4wMzUuMDczLjAzNC4wOS4wNDIuMDYuMDI4LjEwMi4wNDcuMDQ2LjAyMS4xMTYuMDU0LjAzNC4wMTUuMTI5LjA2LjAyLjAwNy4xNDIuMDY2LjAwNy4wMDMuMTQ5LjA2Ni4wMDcuMDA0LjE0Mi4wNjMuMDIuMDEuMTMuMDU3LjAzNC4wMTUuMTE1LjA1MS4wNDcuMDIuMTAyLjA0Ni4wNjEuMDI2LjA4OC4wNC4wNzUuMDMuMDc1LjAzNC4wODguMDM3LjA2Mi4wMjcuMS4wNDQuMDQ5LjAyLjExNS4wNDkuMDM0LjAxNS4xMjkuMDUzLjAyMi4wMS4xNC4wNi4wMDkuMDAzLjI5OC4xMjQuMDIuMDA4LjEzLjA1NC4wMzMuMDEzLjExNy4wNDguMDQ2LjAxOS4xMDMuMDQyLjA2LjAyMy4wOS4wMzcuMDc0LjAzLjA3Ni4wMy4wODYuMDM1LjA2NC4wMjUuMS4wNC4wNS4wMTkuMTEzLjA0NS4wMzYuMDE0LjEyNy4wNS4wMjMuMDA4LjE0LjA1NS4wMS4wMDQuMTUuMDU3LjAwNC4wMDIuMTQ2LjA1NS4wMTcuMDA3LjEzMi4wNS4wMy4wMTIuMTIuMDQ0LjA0NS4wMTcuMTA1LjA0LjA1OC4wMjIuMDkxLjAzMy4wNzIuMDI3LjA3OC4wMjkuMDg1LjAzMS4wNjUuMDIzYy00LjcxNi43MTEtOS42NDIuODI0LTE0LjMyMi4xNDFhMzkuODk4IDM5Ljg5OCAwIDAgMS0xLjQ0Ni0xLjkzN2MtMi4xODgtMy4xMTgtNC4wNzQtNi42ODctNS41OS0xMC42MDV6bTM5LjYyNiA5Ljc3NXptLjY4NS0uMjU3YTM1LjEyNCAzNS4xMjQgMCAwIDAgNC45MTctMi4zNTMgNzAuOSA3MC45IDAgMCAxLTExLjIxNCA1LjIzOGMzLjMzOC41MTcgNi42LjcxMyA5LjcyMy41OTFhNDIuOCA0Mi44IDAgMCAwIDQuNjA1LS40MjVjMy40MjctNC4zMTQgNi4yMjYtOS42NzEgOC4xNzEtMTUuNzRsLS40MjMuNTU2YTM0Ljg4NCAzNC44ODQgMCAwIDEtMTAuODY4IDkuNzggMzQuODc2IDM0Ljg3NiAwIDAgMS00LjkxMSAyLjM1M3ptLTEyLjYzNSA0Ljg0M2MtNi4wMiAxLjUzNC0xMS45NDQgMi4xMi0xNy40MDggMS43NjUgNS4wMTYgNC44NjEgMTEuMDEgNy42OTMgMTcuNDMgNy42OTMgNi40MjkgMCAxMi40MjctMi44MzUgMTcuNDQtNy42OTlsLTEuMjg5LjA2N2MtNS4xMjUuMTk3LTEwLjYwNi0uNDAxLTE2LjE3My0xLjgyNnptMzYuNjU2LTY1LjMzYy41NjggMS4zMy43ODggMi43OTQuNTg2IDQuMTQyLS4zNDMgMi4yOTQtMS44NjEgMy44MTMtNC4xNTUgNC4xNTUtLjIzLjAzNS0uNDY0LjA1Ny0uNy4wNjctMS42NzYtNS43NjEtNC4wNzgtMTAuOTc4LTcuMDQtMTUuNDEyIDMuNTk1IDEuMDIyIDkuNjcgMy4yMiAxMS4zMDkgNy4wNDl6TTQuMTY1IDQ1LjY4N2MyLjQzLTQuOTIgNS44OC05Ljc0MiAxMC4yMTQtMTQuMTggMS42ODMtNi4wMjcgNC4xNS0xMS40NzQgNy4yMjUtMTYuMDczbC0uMDIuMDI4QzE1LjE4NyAxNy4yNDcgOS42MSAyMC44MDQgNi4xOTkgMjYuNzEyIDIuNzg3IDMyLjYyMSAyLjUwMiAzOS4yNCA0LjE2NSA0NS42ODZ6bTE1LjA1Mi0xOC42NmE3MC45MTYgNzAuOTE2IDAgMCAxIDcuNzYzLTUuNjUyIDM0Ljc3MyAzNC43NzMgMCAwIDEgMy4xNy0xLjk0NWwuMDItLjAxMi4xMTQtLjA2NC43NTMtLjQxNC4wNTEtLjAyOS4wOTYtLjA1MS4wNjQtLjAzNS4wODMtLjA0NS4wNzgtLjA0Mi4wNy0uMDM4LjA5LS4wNDguMDU4LS4wMy4xMDQtLjA1Ni4wNDQtLjAyMi4xMTctLjA2My4wMy0uMDE1LjEzMS0uMDcuMDE3LS4wMDguMTQ2LS4wNzZoLjAwMmwuMTQ5LS4wNzguMDEtLjAwNi4xMzgtLjA3LjAyMy0uMDEyLjEyNS0uMDY0LjAzNi0uMDIuMTEyLS4wNTUuMDUtLjAyNi4wOTktLjA1LjA2My0uMDMyLjA4NS0uMDQzLjA3Ny0uMDM5LjA3MS0uMDM2LjA5LS4wNDQuMDU5LS4wMy4xMDMtLjA1LjA0NS0uMDIyLjExOC0uMDU4LjAzLS4wMTYuMTMyLS4wNjQuMDE4LS4wMDkuMTQzLS4wNy4wMDUtLjAwMi4xNS0uMDcyLjAwOC0uMDA0LjE0LS4wNjguMDIxLS4wMS4xMjgtLjA2LjAzNS0uMDE4LjExNC0uMDU0LjA0OC0uMDIzLjEtLjA0Ny4wNjItLjAyOS4wODctLjA0MS4wNzYtLjAzNS4wNzMtLjAzNS4wOS0uMDQuMDYtLjAzLjEwMi0uMDQ2LjA0Ni0uMDIyLjExNi0uMDUzLjAzNC0uMDE1LjEyOS0uMDYuMDItLjAwOC4xNDItLjA2NS4wMDctLjAwMy4xNDktLjA2Ny4wMDctLjAwMy4xNDItLjA2NC4wMi0uMDA5LjEzLS4wNTcuMDM0LS4wMTUuMTE1LS4wNTEuMDQ3LS4wMi4xMDItLjA0Ni4wNjEtLjAyNi4wODgtLjA0LjA3NS0uMDMxLjA3NS0uMDMzLjA4OC0uMDM3LjA2Mi0uMDI3LjEtLjA0NC4wNDktLjAyLjExNS0uMDUuMDM0LS4wMTQuMTI5LS4wNTQuMDIyLS4wMS4xNC0uMDU4LjAwOS0uMDA0LjI5OC0uMTI0LjAyLS4wMDguMTMtLjA1NS4wMzMtLjAxMi4xMTctLjA0OC4wNDYtLjAxOS4xMDMtLjA0Mi4wNi0uMDI0LjA5LS4wMzYuMDc0LS4wMy4wNzYtLjAzLjA4Ni0uMDM1LjA2NC0uMDI1LjEtLjA0LjA1LS4wMi4xMTMtLjA0NC4wMzYtLjAxNC4xMjctLjA1LjAyMy0uMDA4LjE0LS4wNTUuMDEtLjAwNC4xNS0uMDU4LjAwNC0uMDAxLjE0Ni0uMDU2LjAxNy0uMDA2LjEzMi0uMDUuMDMtLjAxMi4xMi0uMDQ1LjA0NS0uMDE3LjEwNS0uMDM5LjA1OC0uMDIyLjA5MS0uMDM0LjA3Mi0uMDI2LjA3OC0uMDI5LjA4NS0uMDMxLjA2NS0uMDI0Yy00LjcxNi0uNzEtOS42NDItLjgyMy0xNC4zMjItLjE0LS40OTcuNjI1LS45NzkgMS4yNy0xLjQ0NiAxLjkzNy0yLjE4OCAzLjExOC00LjA3NCA2LjY4Ny01LjU5IDEwLjYwNXptMzkuNjI2LTkuNzc1em0uNjg1LjI1N2EzNS4xNTggMzUuMTU4IDAgMCAxIDQuOTE3IDIuMzUzIDcwLjkxIDcwLjkxIDAgMCAwLTExLjIxNC01LjIzOWMzLjMzOC0uNTE2IDYuNi0uNzEyIDkuNzIzLS41OWE0Mi44IDQyLjggMCAwIDEgNC42MDUuNDI1YzMuNDI3IDQuMzE0IDYuMjI2IDkuNjcxIDguMTcxIDE1LjczOWwtLjQyMy0uNTU2YTM0Ljg3MyAzNC44NzMgMCAwIDAtMTAuODY4LTkuNzggMzQuODc2IDM0Ljg3NiAwIDAgMC00LjkxMS0yLjM1MnptLTEyLjYzNS00Ljg0NGMtNi4wMi0xLjUzNC0xMS45NDQtMi4xMi0xNy40MDgtMS43NjQgNS4wMTYtNC44NjEgMTEuMDEtNy42OTMgMTcuNDMtNy42OTMgNi40MjkgMCAxMi40MjcgMi44MzUgMTcuNDQgNy42OTlsLTEuMjg5LS4wNjhjLTUuMTI1LS4xOTYtMTAuNjA2LjQwMi0xNi4xNzMgMS44MjZ6TTE1Ny4yMDEgNjMuNjIzbC0yLjczNi0yLjY4M2MtMS43NTQgMS42ODMtMy41NDMgMi45OS01LjM2NyAzLjkyLTEuODI0LjkyOS0zLjk5OSAxLjM5NC02LjUyNCAxLjM5NC0yLjAzNSAwLTMuOTItLjM5NS01LjY1Ny0xLjE4NGExNC4xNTYgMTQuMTU2IDAgMCAxLTQuNTI1LTMuMjM2Yy0xLjI4LTEuMzY4LTIuMjgtMi45ODItMy00Ljg0LS43MTgtMS44Ni0xLjA3OC0zLjg2LTEuMDc4LTZzLjM2LTQuMTMgMS4wNzktNS45NzFjLjcyLTEuODQyIDEuNzE5LTMuNDQ3IDMtNC44MTVhMTMuODE5IDEzLjgxOSAwIDAgMSA0LjUyNC0zLjIxYzEuNzM3LS43NzEgMy42MjItMS4xNTcgNS42NTctMS4xNTcgMi41MjUgMCA0LjY5MS40NzMgNi40OTggMS40MmEyMy4yNzcgMjMuMjc3IDAgMCAxIDUuMDc3IDMuNjMxbDIuODQyLTMuMDUyYTI3LjcyNCAyNy43MjQgMCAwIDAtMi44NDItMi4zOTQgMTYuOTM2IDE2LjkzNiAwIDAgMC0zLjIxLTEuODQxIDE4LjgzNyAxOC44MzcgMCAwIDAtMy43NjEtMS4xODRjLTEuMzUtLjI4MS0yLjg2OC0uNDIxLTQuNTUyLS40MjEtMi43IDAtNS4xOTEuNS03LjQ3MSAxLjUtMi4yOCAxLTQuMjQ1IDIuMzY3LTUuODk0IDQuMTAzLTEuNjQ4IDEuNzM3LTIuOTM3IDMuNzYzLTMuODY3IDYuMDc4LS45MyAyLjMxNS0xLjM5NCA0Ljc4OC0xLjM5NCA3LjQxOSAwIDIuNjY2LjQ2NSA1LjE1NiAxLjM5NCA3LjQ3Mi45MyAyLjMxNSAyLjIxOSA0LjMyMyAzLjg2NyA2LjAyNCAxLjY0OSAxLjcwMSAzLjU5NiAzLjA0MyA1Ljg0MSA0LjAyNSAyLjI0NS45ODMgNC43IDEuNDc0IDcuMzY3IDEuNDc0IDEuNjgzIDAgMy4yMS0uMTU4IDQuNTc3LS40NzRhMTkuMDQzIDE5LjA0MyAwIDAgMCAzLjg0MS0xLjMxNSAxOC40MyAxOC40MyAwIDAgMCAzLjM0Mi0yLjAyNiAyNi4yMSAyNi4yMSAwIDAgMCAyLjk3Mi0yLjY1N3ptMTUuMDE4LTMwLjk5MnYzNi44MzJoNC4xNTdWMzIuNjMxaC00LjE1N3ptMzYuMjIzIDMuODQxaDEyLjM2NXYtMy44NEgxOTEuOTJ2My44NGgxMi4zNjV2MzIuOTkxaDQuMTU3di0zMi45OXptNDAuMzc5LTQuMTA0aC0zLjg5NGwtMTYuNzg1IDM3LjA5NWg0LjI2Mmw0LjM2Ny05LjczNGgyMC4wNDdsNC4zMTUgOS43MzRoNC40NzNMMjQ4LjgyIDMyLjM2OHptNi4zNjYgMjMuNjc4aC0xNi43ODVsOC40MTktMTguNzg1IDguMzY2IDE4Ljc4NXptNTIuMTY2IDYuMTA0TDI4NC4xNDggMzIuNjNoLTMuODkzdjM2LjgzMmg0LjA1MlYzOS4yNjFsMjMuNzgyIDMwLjIwMmgzLjMxNVYzMi42MzFoLTQuMDUxVjYyLjE1em00NC4wMS0yNS44MzZsLTIzLjgzNiAzMC4zNnYyLjc5aDI5LjUxOFY2NS43OGgtMjMuODg4bDIzLjg4OC0zMC4zNnYtMi43ODloLTI4LjcyOHYzLjY4M2gyMy4wNDZ6Ii8+CiAgICA8L2c+Cjwvc3ZnPgo="
                alt="CITANZ logo - white"
              ></a>
            <div class="content">
              CITANZ is a non-profitable organisation to connect and bind all Chinese IT professionals in New Zealand together.
            </div>
          </div>
          <div class="col-lg-8 lg-md-8 col-sm-12">
            <div class="row row-side">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 button align-self-center">
                <p><a href="#">Sponsor us</a></p>
                <p><a href="#">Donate</a></p>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 d-flex justify-content-center">
                <!-- <p class="footer-title">Site Map</p> -->
                <div class="footer-menu site-map">
                  <p class="footer-title">Site Map</p>
                  <p class="content"><a href="#">Home</a></p>
                  <p class="content"><a href="#">Our Team</a></p>
                  <p class="content"><a href="#">Privacy policy</a></p>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 footer-bottom">
                <p class="footer-title">Get in touch</p>
                <div class="footer-menu social">
                  <p class="content"><a href="mailto:info@cita.org.nz">info@cita.org.nz</a></p>
                  <i class="fab fa-facebook-f"></i>
                  <i class="fab fa-twitter"></i>
                  <i class="fab fa-linkedin-in"></i>
                  <i class="fab fa-youtube"></i>
                  <i class="fab fa-instagram"></i>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 footer-bottom">
                <p class="footer-title">Join our Wechat</p>
                <div class="footer-menu QR-code">
                  <img src="https://citanz-api.leochen.co.nz/assets/Uploads/d0fdd8c069/cita-qrcode.svg" alt="CITANZ Wechat QR Code">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright">
          Copyright © 2018 - 2019 CITANZ, Designed by
          <a href="https://www.linkedin.com/in/jing-hu/" title="Jing's blog">Jing</a>
        </div>
      </div>
    </footer>
  </body>

  <script>
    //Get the button
    var scroll = document.getElementById("navbar");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scroll.style.borderBottom = "1px solid #e6e6e6";
        } else {
            scroll.style.border = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
 
  <script src="./js/events.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="bootstrap-dynamic-tabs.js"></script>
  <script src="./js/eventDetailsScript.js"></script>
  <script src="https://kit.fontawesome.com/bdfac7b89e.js" crossorigin="anonymous"></script>
</html>