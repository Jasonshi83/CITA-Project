<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui.time-picker/latest/tui-time-picker.css">
    <link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui.date-picker/latest/tui-date-picker.css">
    <link rel="stylesheet" type="text/css" href="./dist/tui-calendar.css">
    <link rel="stylesheet" type="text/css" href="./css/default.css">
    <link rel="stylesheet" type="text/css" href="./css/icons.css">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <div class="container">
      <!-- navigaion -->
      <nav class="navbar navbar-expand-lg fixed-top navbar-light" id="navbar">
        <a class="navbar-brand" href="#"><img
            class="logo"
            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzNjAiIGhlaWdodD0iMTAwIiB2aWV3Qm94PSIwIDAgMzYwIDEwMCI+CiAgICA8ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxwYXRoIGZpbGw9IiMwMDhGRkUiIGQ9Ik01LjY2NyA1MC4yNWwtLjAxNy0uMDQzYy4yOS0uNzMuNjAzLTEuNDU2Ljk0LTIuMTg0IDEuNTk2LTMuNDMgMy43MjQtNi44MjcgNi4zMzQtMTAuMDc1YTcxLjQ3NiA3MS40NzYgMCAwIDAtMS4wMzYgMTAuNDczIDM0LjYzNiAzNC42MzYgMCAwIDAgMCAzLjY1N2MuMDkyIDMuNTk5LjQ0NyA3LjEwMyAxLjAzNiAxMC40NzMtMi42MS0zLjI0OS00LjczOC02LjY0NC02LjMzMy0xMC4wNzZhNDEuNTQ0IDQxLjU0NCAwIDAgMS0uOTQtMi4xODRsLjAxNi0uMDQxem05LjM4OSAwYTMxLjcwNiAzMS43MDYgMCAwIDEgNC4yNy0xNS45MDUgMzEuNjUxIDMxLjY1MSAwIDAgMSAxMC44NjItMTEuMTg3bC0uMDIzLS4wNGEzMi4wMjQgMzIuMDI0IDAgMCAxIDE3LjE5Ni00Ljc2MSAzMS42NzQgMzEuNjc0IDAgMCAxIDE1LjQ4MiA0LjI3MSAzMi4wNTIgMzIuMDUyIDAgMCAxIDUuNDE3IDMuOTMzYzMuNTQ0IDMuMTkgNS4yNDMgNy44NjYgMTAuNzY4IDcuNjcgMy4yMDItLjExNiA2LjM2NS0yLjAzNyA3LjcwMy01LjExOCA0LjM2OC0xMC4wNDUtOS40MS0xNi4xNy0xNy40Ni0xNy42MTNhNDAuOTYgNDAuOTYgMCAwIDAtMS42ODEtMS44NzNDNjEuNzk2IDMuNTY5IDU0LjY1OCAwIDQ2LjkxNiAwIDM4LjMwMiAwIDMwLjQzOCA0LjQxMiAyNC4zNSAxMS43NDhsLjIxMi0uMjU0QzE1LjMxIDEzLjE1IDcuNjg4IDE3LjczNCAzLjQzIDI1LjExNS0uODMyIDMyLjUtLjk4NiA0MS40MDMgMi4yMTQgNTAuMjUtLjk4NiA1OS4wOTYtLjgzMiA2OCAzLjQzIDc1LjM4M2M0LjI1OCA3LjM4MiAxMS44OCAxMS45NjcgMjEuMTMyIDEzLjYyMWwtLjIxMi0uMjUzYzYuMDg4IDcuMzM2IDEzLjk1MiAxMS43NDggMjIuNTY2IDExLjc0OCA3Ljc0MiAwIDE0Ljg4LTMuNTcgMjAuNjc0LTkuNjI3LjU3My0uNiAxLjEzNC0xLjIyNSAxLjY4MS0xLjg3MyA4LjA1LTEuNDQzIDIxLjgyOC03LjU2OCAxNy40Ni0xNy42MTMtMS4zMzgtMy4wODEtNC41LTUuMDAzLTcuNzAzLTUuMTE3LTUuNTI1LS4xOTctNy4yMjQgNC40NzgtMTAuNzY4IDcuNjY4YTMyLjA3IDMyLjA3IDAgMCAxLTUuNDE3IDMuOTM0IDMxLjY3NyAzMS42NzcgMCAwIDEtMTUuNDgyIDQuMjcgMzIuMDIxIDMyLjAyMSAwIDAgMS0xNy4xOTYtNC43NmwuMDI0LS4wNGEzMS42NTMgMzEuNjUzIDAgMCAxLTEwLjg2My0xMS4xODcgMzEuNzA0IDMxLjcwNCAwIDAgMS00LjI3LTE1LjkwNHptNjguNDkzIDI3Ljc0NGMuNTY4LTEuMzMuNzg4LTIuNzkzLjU4Ni00LjE0MS0uMzQzLTIuMjk1LTEuODYxLTMuODEzLTQuMTU1LTQuMTU2YTYuODIgNi44MiAwIDAgMC0uNy0uMDY2Yy0xLjY3NiA1Ljc2MS00LjA3OCAxMC45NzgtNy4wNCAxNS40MTIgMy41OTUtMS4wMjIgOS42Ny0zLjIyIDExLjMwOS03LjA1ek00LjE2NSA1NC44MTNjMi40MyA0LjkyIDUuODggOS43NDIgMTAuMjE0IDE0LjE4IDEuNjgzIDYuMDI3IDQuMTUgMTEuNDc0IDcuMjI1IDE2LjA3M2wtLjAyLS4wMjljLTYuMzk4LTEuNzg1LTExLjk3NS01LjM0My0xNS4zODYtMTEuMjUtMy40MTEtNS45MDktMy42OTYtMTIuNTI4LTIuMDMzLTE4Ljk3NHptMTUuMDUyIDE4LjY2YTcxLjAwOCA3MS4wMDggMCAwIDAgNy43NjMgNS42NTIgMzQuOTA4IDM0LjkwOCAwIDAgMCAzLjE3IDEuOTQ1bC4wMi4wMTIuMTE0LjA2NC43NTMuNDE0LjA1MS4wMjguMDk2LjA1Mi4wNjQuMDM0LjA4My4wNDUuMDc4LjA0Mi4wNy4wMzguMDkuMDQ4LjA1OC4wMy4xMDQuMDU3LjA0NC4wMjIuMTE3LjA2My4wMy4wMTUuMTMxLjA3LjAxNy4wMDguMTQ2LjA3NS4wMDIuMDAyLjE0OS4wNzYuMDEuMDA2LjEzOC4wNzEuMDIzLjAxMi4xMjUuMDY0LjAzNi4wMi4xMTIuMDU1LjA1LjAyNi4wOTkuMDUuMDYzLjAzMi4wODUuMDQzLjA3Ny4wMzkuMDcxLjAzNS4wOS4wNDQuMDU5LjAzLjEwMy4wNTEuMDQ1LjAyMi4xMTguMDU4LjAzLjAxNi4xMzIuMDY0LjAxOC4wMDguMTQzLjA3LjAwNS4wMDMuMTUuMDcyLjAwOC4wMDQuMTQuMDY4LjAyMS4wMS4xMjguMDYuMDM1LjAxOC4xMTQuMDUzLjA0OC4wMjQuMS4wNDcuMDYyLjAyOS4wODcuMDQxLjA3Ni4wMzUuMDczLjAzNC4wOS4wNDIuMDYuMDI4LjEwMi4wNDcuMDQ2LjAyMS4xMTYuMDU0LjAzNC4wMTUuMTI5LjA2LjAyLjAwNy4xNDIuMDY2LjAwNy4wMDMuMTQ5LjA2Ni4wMDcuMDA0LjE0Mi4wNjMuMDIuMDEuMTMuMDU3LjAzNC4wMTUuMTE1LjA1MS4wNDcuMDIuMTAyLjA0Ni4wNjEuMDI2LjA4OC4wNC4wNzUuMDMuMDc1LjAzNC4wODguMDM3LjA2Mi4wMjcuMS4wNDQuMDQ5LjAyLjExNS4wNDkuMDM0LjAxNS4xMjkuMDUzLjAyMi4wMS4xNC4wNi4wMDkuMDAzLjI5OC4xMjQuMDIuMDA4LjEzLjA1NC4wMzMuMDEzLjExNy4wNDguMDQ2LjAxOS4xMDMuMDQyLjA2LjAyMy4wOS4wMzcuMDc0LjAzLjA3Ni4wMy4wODYuMDM1LjA2NC4wMjUuMS4wNC4wNS4wMTkuMTEzLjA0NS4wMzYuMDE0LjEyNy4wNS4wMjMuMDA4LjE0LjA1NS4wMS4wMDQuMTUuMDU3LjAwNC4wMDIuMTQ2LjA1NS4wMTcuMDA3LjEzMi4wNS4wMy4wMTIuMTIuMDQ0LjA0NS4wMTcuMTA1LjA0LjA1OC4wMjIuMDkxLjAzMy4wNzIuMDI3LjA3OC4wMjkuMDg1LjAzMS4wNjUuMDIzYy00LjcxNi43MTEtOS42NDIuODI0LTE0LjMyMi4xNDFhMzkuODk4IDM5Ljg5OCAwIDAgMS0xLjQ0Ni0xLjkzN2MtMi4xODgtMy4xMTgtNC4wNzQtNi42ODctNS41OS0xMC42MDV6bTM5LjYyNiA5Ljc3NXptLjY4NS0uMjU3YTM1LjEyNCAzNS4xMjQgMCAwIDAgNC45MTctMi4zNTMgNzAuOSA3MC45IDAgMCAxLTExLjIxNCA1LjIzOGMzLjMzOC41MTcgNi42LjcxMyA5LjcyMy41OTFhNDIuOCA0Mi44IDAgMCAwIDQuNjA1LS40MjVjMy40MjctNC4zMTQgNi4yMjYtOS42NzEgOC4xNzEtMTUuNzRsLS40MjMuNTU2YTM0Ljg4NCAzNC44ODQgMCAwIDEtMTAuODY4IDkuNzggMzQuODc2IDM0Ljg3NiAwIDAgMS00LjkxMSAyLjM1M3ptLTEyLjYzNSA0Ljg0M2MtNi4wMiAxLjUzNC0xMS45NDQgMi4xMi0xNy40MDggMS43NjUgNS4wMTYgNC44NjEgMTEuMDEgNy42OTMgMTcuNDMgNy42OTMgNi40MjkgMCAxMi40MjctMi44MzUgMTcuNDQtNy42OTlsLTEuMjg5LjA2N2MtNS4xMjUuMTk3LTEwLjYwNi0uNDAxLTE2LjE3My0xLjgyNnptMzYuNjU2LTY1LjMzYy41NjggMS4zMy43ODggMi43OTQuNTg2IDQuMTQyLS4zNDMgMi4yOTQtMS44NjEgMy44MTMtNC4xNTUgNC4xNTUtLjIzLjAzNS0uNDY0LjA1Ny0uNy4wNjctMS42NzYtNS43NjEtNC4wNzgtMTAuOTc4LTcuMDQtMTUuNDEyIDMuNTk1IDEuMDIyIDkuNjcgMy4yMiAxMS4zMDkgNy4wNDl6TTQuMTY1IDQ1LjY4N2MyLjQzLTQuOTIgNS44OC05Ljc0MiAxMC4yMTQtMTQuMTggMS42ODMtNi4wMjcgNC4xNS0xMS40NzQgNy4yMjUtMTYuMDczbC0uMDIuMDI4QzE1LjE4NyAxNy4yNDcgOS42MSAyMC44MDQgNi4xOTkgMjYuNzEyIDIuNzg3IDMyLjYyMSAyLjUwMiAzOS4yNCA0LjE2NSA0NS42ODZ6bTE1LjA1Mi0xOC42NmE3MC45MTYgNzAuOTE2IDAgMCAxIDcuNzYzLTUuNjUyIDM0Ljc3MyAzNC43NzMgMCAwIDEgMy4xNy0xLjk0NWwuMDItLjAxMi4xMTQtLjA2NC43NTMtLjQxNC4wNTEtLjAyOS4wOTYtLjA1MS4wNjQtLjAzNS4wODMtLjA0NS4wNzgtLjA0Mi4wNy0uMDM4LjA5LS4wNDguMDU4LS4wMy4xMDQtLjA1Ni4wNDQtLjAyMi4xMTctLjA2My4wMy0uMDE1LjEzMS0uMDcuMDE3LS4wMDguMTQ2LS4wNzZoLjAwMmwuMTQ5LS4wNzguMDEtLjAwNi4xMzgtLjA3LjAyMy0uMDEyLjEyNS0uMDY0LjAzNi0uMDIuMTEyLS4wNTUuMDUtLjAyNi4wOTktLjA1LjA2My0uMDMyLjA4NS0uMDQzLjA3Ny0uMDM5LjA3MS0uMDM2LjA5LS4wNDQuMDU5LS4wMy4xMDMtLjA1LjA0NS0uMDIyLjExOC0uMDU4LjAzLS4wMTYuMTMyLS4wNjQuMDE4LS4wMDkuMTQzLS4wNy4wMDUtLjAwMi4xNS0uMDcyLjAwOC0uMDA0LjE0LS4wNjguMDIxLS4wMS4xMjgtLjA2LjAzNS0uMDE4LjExNC0uMDU0LjA0OC0uMDIzLjEtLjA0Ny4wNjItLjAyOS4wODctLjA0MS4wNzYtLjAzNS4wNzMtLjAzNS4wOS0uMDQuMDYtLjAzLjEwMi0uMDQ2LjA0Ni0uMDIyLjExNi0uMDUzLjAzNC0uMDE1LjEyOS0uMDYuMDItLjAwOC4xNDItLjA2NS4wMDctLjAwMy4xNDktLjA2Ny4wMDctLjAwMy4xNDItLjA2NC4wMi0uMDA5LjEzLS4wNTcuMDM0LS4wMTUuMTE1LS4wNTEuMDQ3LS4wMi4xMDItLjA0Ni4wNjEtLjAyNi4wODgtLjA0LjA3NS0uMDMxLjA3NS0uMDMzLjA4OC0uMDM3LjA2Mi0uMDI3LjEtLjA0NC4wNDktLjAyLjExNS0uMDUuMDM0LS4wMTQuMTI5LS4wNTQuMDIyLS4wMS4xNC0uMDU4LjAwOS0uMDA0LjI5OC0uMTI0LjAyLS4wMDguMTMtLjA1NS4wMzMtLjAxMi4xMTctLjA0OC4wNDYtLjAxOS4xMDMtLjA0Mi4wNi0uMDI0LjA5LS4wMzYuMDc0LS4wMy4wNzYtLjAzLjA4Ni0uMDM1LjA2NC0uMDI1LjEtLjA0LjA1LS4wMi4xMTMtLjA0NC4wMzYtLjAxNC4xMjctLjA1LjAyMy0uMDA4LjE0LS4wNTUuMDEtLjAwNC4xNS0uMDU4LjAwNC0uMDAxLjE0Ni0uMDU2LjAxNy0uMDA2LjEzMi0uMDUuMDMtLjAxMi4xMi0uMDQ1LjA0NS0uMDE3LjEwNS0uMDM5LjA1OC0uMDIyLjA5MS0uMDM0LjA3Mi0uMDI2LjA3OC0uMDI5LjA4NS0uMDMxLjA2NS0uMDI0Yy00LjcxNi0uNzEtOS42NDItLjgyMy0xNC4zMjItLjE0LS40OTcuNjI1LS45NzkgMS4yNy0xLjQ0NiAxLjkzNy0yLjE4OCAzLjExOC00LjA3NCA2LjY4Ny01LjU5IDEwLjYwNXptMzkuNjI2LTkuNzc1em0uNjg1LjI1N2EzNS4xNTggMzUuMTU4IDAgMCAxIDQuOTE3IDIuMzUzIDcwLjkxIDcwLjkxIDAgMCAwLTExLjIxNC01LjIzOWMzLjMzOC0uNTE2IDYuNi0uNzEyIDkuNzIzLS41OWE0Mi44IDQyLjggMCAwIDEgNC42MDUuNDI1YzMuNDI3IDQuMzE0IDYuMjI2IDkuNjcxIDguMTcxIDE1LjczOWwtLjQyMy0uNTU2YTM0Ljg3MyAzNC44NzMgMCAwIDAtMTAuODY4LTkuNzggMzQuODc2IDM0Ljg3NiAwIDAgMC00LjkxMS0yLjM1MnptLTEyLjYzNS00Ljg0NGMtNi4wMi0xLjUzNC0xMS45NDQtMi4xMi0xNy40MDgtMS43NjQgNS4wMTYtNC44NjEgMTEuMDEtNy42OTMgMTcuNDMtNy42OTMgNi40MjkgMCAxMi40MjcgMi44MzUgMTcuNDQgNy42OTlsLTEuMjg5LS4wNjhjLTUuMTI1LS4xOTYtMTAuNjA2LjQwMi0xNi4xNzMgMS44MjZ6Ii8+CiAgICAgICAgPHBhdGggZmlsbD0iIzJGMzEzMyIgZD0iTTE1Ny4yMDEgNjMuNjIzbC0yLjczNi0yLjY4M2MtMS43NTQgMS42ODMtMy41NDMgMi45OS01LjM2NyAzLjkyLTEuODI0LjkyOS0zLjk5OSAxLjM5NC02LjUyNCAxLjM5NC0yLjAzNSAwLTMuOTItLjM5NS01LjY1Ny0xLjE4NGExNC4xNTYgMTQuMTU2IDAgMCAxLTQuNTI1LTMuMjM2Yy0xLjI4LTEuMzY4LTIuMjgtMi45ODItMy00Ljg0LS43MTgtMS44Ni0xLjA3OC0zLjg2LTEuMDc4LTZzLjM2LTQuMTMgMS4wNzktNS45NzFjLjcyLTEuODQyIDEuNzE5LTMuNDQ3IDMtNC44MTVhMTMuODE5IDEzLjgxOSAwIDAgMSA0LjUyNC0zLjIxYzEuNzM3LS43NzEgMy42MjItMS4xNTcgNS42NTctMS4xNTcgMi41MjUgMCA0LjY5MS40NzMgNi40OTggMS40MmEyMy4yNzcgMjMuMjc3IDAgMCAxIDUuMDc3IDMuNjMxbDIuODQyLTMuMDUyYTI3LjcyNCAyNy43MjQgMCAwIDAtMi44NDItMi4zOTQgMTYuOTM2IDE2LjkzNiAwIDAgMC0zLjIxLTEuODQxIDE4LjgzNyAxOC44MzcgMCAwIDAtMy43NjEtMS4xODRjLTEuMzUtLjI4MS0yLjg2OC0uNDIxLTQuNTUyLS40MjEtMi43IDAtNS4xOTEuNS03LjQ3MSAxLjUtMi4yOCAxLTQuMjQ1IDIuMzY3LTUuODk0IDQuMTAzLTEuNjQ4IDEuNzM3LTIuOTM3IDMuNzYzLTMuODY3IDYuMDc4LS45MyAyLjMxNS0xLjM5NCA0Ljc4OC0xLjM5NCA3LjQxOSAwIDIuNjY2LjQ2NSA1LjE1NiAxLjM5NCA3LjQ3Mi45MyAyLjMxNSAyLjIxOSA0LjMyMyAzLjg2NyA2LjAyNCAxLjY0OSAxLjcwMSAzLjU5NiAzLjA0MyA1Ljg0MSA0LjAyNSAyLjI0NS45ODMgNC43IDEuNDc0IDcuMzY3IDEuNDc0IDEuNjgzIDAgMy4yMS0uMTU4IDQuNTc3LS40NzRhMTkuMDQzIDE5LjA0MyAwIDAgMCAzLjg0MS0xLjMxNSAxOC40MyAxOC40MyAwIDAgMCAzLjM0Mi0yLjAyNiAyNi4yMSAyNi4yMSAwIDAgMCAyLjk3Mi0yLjY1N3ptMTUuMDE4LTMwLjk5MnYzNi44MzJoNC4xNTdWMzIuNjMxaC00LjE1N3ptMzYuMjIzIDMuODQxaDEyLjM2NXYtMy44NEgxOTEuOTJ2My44NGgxMi4zNjV2MzIuOTkxaDQuMTU3di0zMi45OXptNDAuMzc5LTQuMTA0aC0zLjg5NGwtMTYuNzg1IDM3LjA5NWg0LjI2Mmw0LjM2Ny05LjczNGgyMC4wNDdsNC4zMTUgOS43MzRoNC40NzNMMjQ4LjgyIDMyLjM2OHptNi4zNjYgMjMuNjc4aC0xNi43ODVsOC40MTktMTguNzg1IDguMzY2IDE4Ljc4NXptNTIuMTY2IDYuMTA0TDI4NC4xNDggMzIuNjNoLTMuODkzdjM2LjgzMmg0LjA1MlYzOS4yNjFsMjMuNzgyIDMwLjIwMmgzLjMxNVYzMi42MzFoLTQuMDUxVjYyLjE1em00NC4wMS0yNS44MzZsLTIzLjgzNiAzMC4zNnYyLjc5aDI5LjUxOFY2NS43OGgtMjMuODg4bDIzLjg4OC0zMC4zNnYtMi43ODloLTI4LjcyOHYzLjY4M2gyMy4wNDZ6Ii8+CiAgICA8L2c+Cjwvc3ZnPgo="
            alt="logo"
          ></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto align-middle">
            <li class="nav-item active">
              <a class="nav-link links current" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link links" href="#">Our Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link links" href="#">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/">
                <img src="https://www.gravatar.com/avatar/5c25e0e0063bc9535b723c133e39a11d?s=64&d=mm&r=g" alt="login-avatar">
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="row row-body">
        <div class="col-3 profile">
          <img src="https://www.gravatar.com/avatar/5c25e0e0063bc9535b723c133e39a11d?s=64&d=mm&r=g" alt="avatar-profile">
          <div class="profile-content">
              <div class="sub-content">
                <h5>NAME SURNAME</h5>
              </div>
              <div class="sub-content content-1">
                <p><b>Personal Details</b></p>
                <p>one of three columns</p>
                <p>one of three columns</p>
                <p>one of three columns</p>
                <p>one of three columns</p>
                <p>one of three columns</p>
              </div>
              <div class="sub-content content-2">
                <p><b>Events</b></p>
                <p><a href="#">Favourite</a></p>
                <p><a href="#">RSVP</a></p>
              </div>
          </div>
        </div>
        <div class="col-5">
          <div class="code-html">
            <div id="menu">
              <span id="menu-navi">
                <button type="button" class="btn btn-default btn-sm move-today" data-action="move-today">Today</button>
                <button type="button" class="btn btn-default btn-sm move-day" data-action="move-prev">
                  <i class="calendar-icon ic-arrow-line-left" data-action="move-prev"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm move-day" data-action="move-next">
                  <i class="calendar-icon ic-arrow-line-right" data-action="move-next"></i>
                </button>
              </span>
              <span id="renderRange" class="render-range"></span>
            </div>

            <div id="calendar"></div>
          </div>
        </div>
        <div class="col-4">
          <div class="event-content">
            <div class="event-subcontent">
              <h4>Events</h4>
            </div>
            <div class="card w-100">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Button</a>
              </div>
            </div>
            <div class="card w-100">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Button</a>
              </div>
            </div>
            <div class="card w-100">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
                  <a href="#" class="fa fa-facebook"></a>
                  <a href="#" class="fa fa-twitter"></a>
                  <a href="#" class="fa fa-linkedin"></a>
                  <a href="#" class="fa fa-youtube"></a>
                  <a href="#" class="fa fa-instagram"></a>
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
    window.onscroll = function() {scrollFunction()};

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
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="https://uicdn.toast.com/tui.code-snippet/latest/tui-code-snippet.min.js"></script>
  <script src="https://uicdn.toast.com/tui.dom/v3.0.0/tui-dom.js"></script>
  <script src="https://uicdn.toast.com/tui.time-picker/latest/tui-time-picker.min.js"></script>
  <script src="https://uicdn.toast.com/tui.date-picker/latest/tui-date-picker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chance/1.0.13/chance.min.js"></script>
  <script src="./dist/tui-calendar.js"></script>
  <script src="./js/data/calendars.js"></script>
  <script src="./js/data/schedules.js"></script>
  <script type="text/javascript" class="code-js">
  // register templates
  const templates = {
    popupIsAllDay: function() {
      return 'All Day';
    },
    popupStateFree: function() {
      return 'Free';
    },
    popupStateBusy: function() {
      return 'Busy';
    },
    titlePlaceholder: function() {
      return 'Subject';
    },
    locationPlaceholder: function() {
      return 'Location';
    },
    startDatePlaceholder: function() {
      return 'Start date';
    },
    endDatePlaceholder: function() {
      return 'End date';
    },
    popupSave: function() {
      return 'Save';
    },
    popupUpdate: function() {
      return 'Update';
    },
    popupDetailDate: function(isAllDay, start, end) {
      var isSameDate = moment(start).isSame(end);
      var endFormat = (isSameDate ? '' : 'YYYY.MM.DD ') + 'hh:mm a';

      if (isAllDay) {
        return moment(start).format('YYYY.MM.DD') + (isSameDate ? '' : ' - ' + moment(end).format('YYYY.MM.DD'));
      }

      return (moment(start).format('YYYY.MM.DD hh:mm a') + ' - ' + moment(end).format(endFormat));
    },
    popupDetailLocation: function(schedule) {
      return 'Location : ' + schedule.location;
    },
    popupDetailUser: function(schedule) {
      return 'User : ' + (schedule.attendees || []).join(', ');
    },
    popupDetailState: function(schedule) {
      return 'State : ' + schedule.state || 'Busy';
    },
    popupDetailRepeat: function(schedule) {
      return 'Repeat : ' + schedule.recurrenceRule;
    },
    popupDetailBody: function(schedule) {
      return 'Body : ' + schedule.body;
    },
    popupEdit: function() {
      return 'Edit';
    },
    popupDelete: function() {
      return 'Delete';
    }
  };

  var cal = new tui.Calendar('#calendar', {
    defaultView: 'month',
    template: templates,
    useCreationPopup: true,
    useDetailPopup: true
  });
  </script>
  <script src="./js/default.js"></script>
</html>
