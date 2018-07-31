<style>

body, html {
    margin: 0;
    padding: 0;
    line-height: 1.8;
    height: 100%
}

body{

}

.container {
  margin: 0 auto;
  max-width: 940px;
  max-height: 100px;
  padding: 0 10px;
}

.header {
  background: url(/stms/resources/bg.jpg) no-repeat center center;
  background-size: cover;
  height: 800px;
  text-align: center;
}

.header .container {
    position: relative;
    top: 90px
}

.header h1 {
  color: #fff;
  line-height: 100px;
  font-size: 80px;
  margin-top: 0;
  margin-bottom: 80px;
  text-transform: uppercase;
}

@media (min-width:850px) {
  .header h1 {
    font-size: 120px;
  }
}

.header p {
  color: #fff;
  font-weight: 500;
  letter-spacing: 8px;
  margin-bottom: 40px;
  margin-top: 0;
  text-transform: uppercase;
}

nav{
  background: #000;
  height: 80px;
  width: 100%;
}

nav ul {
  height: 80px;
  list-style: none;
  margin:-32px auto;
  padding: 0;
}

nav ul li {
  color: #000000;
  display: inline-block;
  height: 40px;
  line-height: 40px;
  list-style: none;

  padding: 0 10px;

}

nav ul li:hover, .dropdown:hover .dropbtn {

  cursor: pointer;
  transition: background .5s;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content li {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content li:hover {
    background-color: #117bff;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.main .container {
  margin: 80px auto;
}

.main img {
  float: left;
  margin: 50px 80px 50px 0;
}

.jumbotron {
  background: url(/stms/resources/jumbotron_bg.jpg) center center;
  background-size: cover;
  height: 600px;
  margin-bottom: 0rem;
}

.jumbotron .container {
  position: relative;
  top: 220px;
}

.jumbotron h2 {
  color: #fff;
  text-align: right;
}

.jumbotron p {
  color: #fff;
  text-align: right;
}

.jumbotron .btn {
  margin: 10px 0 0;
  float: right;
}

.footer {
  background: #000;
  height: 80px;
  padding-bottom: 50px;
}

.footer p {
  color: #fff;
  font-size: 14px;
  height: 80px;
  line-height: 80px;
  margin: 0;
}

@media (max-width: 500px) {
  .header h1 {
    font-size: 50px;
    line-height: 64px;
  }

  .main, .jumbotron {
    padding: 0 30px;
  }

  .main img {
    width: 100%;
  }
}

.container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
}

#logo{
  max-width:85px;
}

#logout {
}

#heading{
  color: #1abc9c !important;
  margin-top: -200px auto;
  font-style: bold;
}

.heading{
  margin-top: -40px;
  color: darkred !important;
  font-size: 40px;
  justify-content: center;
  align-items: center;
}

#paragraph{
  font-size: 18px !important;
}

#paragraph2{
  font-size: 22px !important;
  text-transform: capitalize !important;
  word-spacing: normal !important;
  letter-spacing: normal !important;
}

#togglebar{
  margin-top: -30px;
}

a {
  color: #17a2b8;
  text-decoration: bold;
  background-color: transparent;
}


/*/////////////////////////////////////// TABLE ////////////////////////////////////////////////////////////////////////*/

.limiter {
  width: 100%;
  margin: 0 auto;
  height: 100%;
  position: absolute;

}

.container-table100 {
  width: 100%;
  position:absolute;
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  padding: 33px 30px;
}

.wrap-table100 {
  width: 1170px;
}

table {
  border-spacing: 1;
  border-collapse: collapse;
  background: white;
  border-radius: 10px;
  overflow: hidden;
  width: 100%;
  margin: 0 auto;
  margin-top: -200px auto;
  position: relative;
}
table * {
  position: relative;
}
table thead th { color: white; font-size:14pt; }

table td, table th {
  padding-left: 8px;
}
table thead tr {
  height: 60px;
  background: #36304a;
}
table tbody tr {
  height: 50px;
}
table tbody tr:last-child {
  border: 0;
}
table td, table th {
  text-align: left;
}
table td.l, table th.l {
  text-align: right;
}
table td.c, table th.c {
  text-align: center;
}
table td.r, table th.r {
  text-align: center;
}


.table100-head th{
  font-family: OpenSans-Regular;
  font-size: 18px;
  color: #fff;
  line-height: 1.2;
  font-weight: unset;
}

tbody tr:nth-child(even) {
  background-color: #f5f5f5;
}

tbody tr {
  font-family: OpenSans-Regular;
  font-size: 15px;
  color: #808080;
  line-height: 1.2;
  font-weight: unset;
}

tbody tr:hover {
  color: #555555;
  background-color: #f5f5f5;
  cursor: pointer;
}

@media screen and (max-width: 992px) {
  table {
    display: block;
  }
  table > *, table tr, table td, table th {
    display: block;
  }
  table thead {
    display: none;
  }
  table tbody tr {
    height: auto;
    padding: 37px 0;
  }
  table tbody tr td {
    padding-left: 40% !important;
    margin-bottom: 24px;
  }
  table tbody tr td:last-child {
    margin-bottom: 0;
  }
  table tbody tr td:before {
    font-family: OpenSans-Regular;
    font-size: 14px;
    color: #999999;
    line-height: 1.2;
    font-weight: unset;
    position: absolute;
    width: 40%;
    left: 30px;
    top: 0;
  }
  table tbody tr td:nth-child(1):before {
    content: "Date";
  }
  table tbody tr td:nth-child(2):before {
    content: "Order ID";
  }
  table tbody tr td:nth-child(3):before {
    content: "Name";
  }
  table tbody tr td:nth-child(4):before {
    content: "Price";
  }
  table tbody tr td:nth-child(5):before {
    content: "Quantity";
  }
  table tbody tr td:nth-child(6):before {
    content: "Total";
  }

  tbody tr {
    font-size: 14px;
  }
}

@media (max-width: 576px) {
  .container-table100 {
    padding-left: 15px;
    padding-right: 15px;
  }
}

/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/



button {
  overflow: visible;
}


.login {
  position: absolute;
  top:150px;
  width: 600px;
  height: 400px;
  border-radius: 10px;
  left: 350px;
  border: 1px solid;
  padding: 10px;
  box-shadow: 5px 10px 8px #888888;
}

#cmd{
  color: #ffc107;
}

.login:hover,
#cmd:hover,
#heading:hover,
.heading:hover,
#logo:hover,
#paragraph:hover{
  transform: scale(1.05);
}

.app-title {
text-align: center;
color: #777;
}

.login-form {
text-align: center;
}
.control-group {
margin-bottom: 10px;
}

input {
text-align: center;
background-color: #ECF0F1;
border: 2px solid transparent;
border-radius: 3px;
font-size: 16px;
font-weight: 200;
padding: 10px 0;
width: 250px;
transition: border .5s;
}

input:focus {
border: 2px solid #3498DB;
box-shadow: none;
}

.btn {
  border: 2px solid transparent;
  background: #3498DB;
  color: #ffffff;
  font-size: 16px;
  line-height: 25px;
  padding: 10px 0;
  text-decoration: none;
  text-shadow: none;
  border-radius: 3px;
  box-shadow: none;
  transition: 0.25s;
  display: block;
  width: 250px;
  margin: 0 auto;
}

.btn:hover{
  background-color: #2980B9;
  transform: scale(1.05);
}

.login-link {
  font-size: 9px;
  color: #444;
  display: block;
  margin-top: 12px;
}

/* Banner */

  #banner {
    padding: 8em 0 9em 0;
    /*background-image: url(/stms/resources/banner.jpg);*/
    background-size: cover;
    background-position: bottom;
    background-attachment: fixed;
    background-repeat: no-repeat;
    text-align: center;
    position: relative;
  }

    #banner:before {
      content: '';
      background: rgba(75, 75, 93, 0.85);
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
    }

    #banner .inner {
      border-top: 2px solid rgba(255, 255, 255, 0.2);
      position: relative;
      z-index: 10005;
      padding-top: 8em;
    }

    #banner h1 {
      font-size: 3.5em;
      font-weight: 400;
      color: #fff;
      line-height: 1em;
      margin: 0 0 1em 0;
      padding: 0;
    }

    #banner h3 {
      font-weight: 400;
      color: #fff;
      margin: 0;
      font-size: 1.5em;
    }

    #banner .icon {
      color: #6cc091;
      font-size: 2em;
    }

    #banner p {
      font-size: 1em;
      color: rgba(255, 255, 255, 0.55);
      margin-bottom: 1.75em;
    }

    #banner .flex {
      -ms-flex-pack: center;
      -moz-justify-content: center;
      -webkit-justify-content: center;
      -ms-justify-content: center;
      justify-content: center;
      text-align: center;
      margin: 0 auto 4em auto;
    }

      #banner .flex div {
        border-right: 2px solid rgba(255, 255, 255, 0.2);
        padding: 0 8em;
      }

        #banner .flex div:last-child {
          border: none;
          padding-right: 0;
        }

        #banner .flex div:first-child {
          padding-left: 0;
        }

        #banner .flex div p {
          margin: 0;
        }

    @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) {

      #banner {
        background-attachment: scroll;
      }

    }

    @media screen and (max-width: 1680px) {

      #banner .flex div {
        padding: 0 6em;
      }

    }

    @media screen and (max-width: 1280px) {

      #banner {
        padding: 7em 0 6em 0;
      }

        #banner .inner {
          padding-top: 6em;
        }

        #banner h1 {
          font-size: 3em;
        }

        #banner h3 {
          font-size: 1.25em;
        }

        #banner .flex div {
          padding: 0 3em;
        }

    }

    @media screen and (max-width: 980px) {

      #banner {
        background-attachment: scroll;
        padding: 5em 0 4em 0;
      }

        #banner .inner {
          padding-top: 4em;
        }

        #banner h1 {
          font-size: 2.5em;
        }

        #banner h3 {
          font-size: 1.25em;
        }

        #banner .flex div {
          font-size: .85em;
          padding: 0 1.5em;
        }

    }

    @media screen and (max-width: 736px) {

      #banner {
        padding: 4em 0 3em 0;
      }

        #banner .inner {
          padding-top: 3em;
        }

        #banner h1 {
          font-size: 2em;
        }

        #banner h3 {
          font-size: 1.25em;
        }

        #banner .flex {
          -moz-flex-direction: column;
          -webkit-flex-direction: column;
          -ms-flex-direction: column;
          flex-direction: column;
          margin: 0 auto 2em auto;
        }

          #banner .flex div {
            font-size: .85em;
            padding: 0;
            border: none;
            margin-bottom: 1em;
          }

    }

    @media screen and (max-width: 480px) {

      #banner h1 {
        font-size: 1.5em;
      }

    }

</style>
