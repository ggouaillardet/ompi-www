<?php
$topdir = "../../..";
$title = "MPI_Add_error_code(3) man page (version 1.8.1)";
$meta_desc = "Open MPI v1.8.1 man page: MPI_ADD_ERROR_CODE(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
   <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<p>
<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Add_error_code</b> - Creates a new error code associated with <i>errorclass</i>

<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<p>
<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Add_error_code(int errorclass, int *errorcode)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_ADD_ERROR_CODE(ERRORCLASS, ERRORCODE, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER  ERRORCLASS, ERRORCODE, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI::Add_error_code(int errorclass, int* errorcode)
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameter</a></h2>

<dl>

<dt>errorclass </dt>
<dd>MPI error class (integer).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>errorcode
</dt>
<dd>Error code returned by an MPI routine or an MPI error class (integer). </dd>

<dt>IERROR
</dt>
<dd>Fortran only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
Creates a new error code
associated with <i>errorclass</i> and returns its value in <i>errorcode</i>.
<p>
<h2><a name='sect8' href='#toc8'>Notes</a></h2>
No
function is provided to free error codes, as it is not expected that an
application will create them in significant numbers. <p>
The value returned
is always greater than or equal to MPI_ERR_LASTCODE.
<p>
<h2><a name='sect9' href='#toc9'>Errors</a></h2>
Almost all MPI
routines return an error value; C routines as the value of the function
and Fortran routines in the last argument. C++ functions do not return errors.
If the default error handler is set to MPI::ERRORS_THROW_EXCEPTIONS, then
on error the C++ exception mechanism will be used to throw an MPI::Exception
object. <p>
Before the error value is returned, the current MPI error handler
is called. By default, this error handler aborts the MPI job, except for
I/O function errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>;
the predefined error handler MPI_ERRORS_RETURN may be used to cause error
values to be returned. Note that MPI does not guarantee that an MPI program
can continue past an error.
<p>
<h2><a name='sect10' href='#toc10'>See Also</a></h2>
<br>
<pre><a href="../man3/MPI_Add_error_class.3.php">MPI_Add_error_class</a>
<a href="../man3/MPI_Error_class.3.php">MPI_Error_class</a>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
