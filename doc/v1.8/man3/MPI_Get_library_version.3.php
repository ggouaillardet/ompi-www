<?php
$topdir = "../../..";
$title = "MPI_Get_library_version(3) man page (version 1.8.1)";
$meta_desc = "Open MPI v1.8.1 man page: MPI_GET_LIBRARY_VERSION(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
    <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Get_library_version</b> - Returns a string of the current Open MPI

<p>version
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Get_library_version(char *version, int *resultlen)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_GET_LIBRARY_VERSION(VERSION, RESULTLEN, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;CHARACTER*(*)<tt> </tt>&nbsp;<tt> </tt>&nbsp;NAME
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER RESULTLEN, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>There is no C++ binding for this function.
</pre>
<h2><a name='sect5' href='#toc5'>Output Parameters</a></h2>

<dl>

<dt>version </dt>
<dd>A string containing the Open MPI version (string).

<p> </dd>

<dt>resultlen </dt>
<dd>Length (in characters) of result returned in <i>version</i> (integer).

<p> </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Description</a></h2>
This routine
returns a string representing the version of the MPI library. The version
argument is a character string for maximum flexibility. <p>
The number of characters
actually written is returned in the output argument, <i>resultlen</i>. In C, a
&rsquo;\0&rsquo; character is additionally stored at <i>version[resultlen]</i>. The <i>resultlen</i>
cannot be larger than (MPI_MAX_LIBRARY_VERSION_STRING - 1). In Fortran, version
is padded on the right with blank characters. The <i>resultlen</i> cannot be larger
than MPI_MAX_LIBRARY_VERSION_STRING.
<p>
<h2><a name='sect7' href='#toc7'>Note</a></h2>
The <i>version</i> string that is passed
must be at least MPI_MAX_LIBRARY_VERSION_STRING characters long. <p>
MPI_Get_library_version
is one of the few functions that can be called before <a href="../man3/MPI_Init.3.php">MPI_Init</a> and after
<a href="../man3/MPI_Finalize.3.php">MPI_Finalize</a>. <p>
MPI_Get_library_version is an MPI-3 function and has no C++
binding.
<p>
<h2><a name='sect8' href='#toc8'>Errors</a></h2>
Almost all MPI routines return an error value; C routines
as the value of the function and Fortran routines in the last argument.
<p>
Before the error value is returned, the current MPI error handler is called.
By default, this error handler aborts the MPI job, except for I/O function
errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the
predefined error handler MPI_ERRORS_RETURN may be used to cause error values
to be returned. Note that MPI does not guarantee that an MPI program can
continue past an error.
<p>
<h2><a name='sect9' href='#toc9'>See Also</a></h2>
<br>
<pre><a href="../man3/MPI_Get_version.3.php">MPI_Get_version</a>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
