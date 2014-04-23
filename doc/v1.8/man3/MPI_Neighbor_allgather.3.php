<?php
$topdir = "../../..";
$title = "MPI_Neighbor_allgather(3) man page (version 1.8.1)";
$meta_desc = "Open MPI v1.8.1 man page: MPI_NEIGHBOR_ALLGATHER(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
     <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Neighbor_allgather, <a href="../man3/MPI_Ineighbor_allgather.3.php">MPI_Ineighbor_allgather</a></b> - Gathers and distributes

<p>data from and to all neighbors
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Neighbor_allgather(const void *sendbuf, int  sendcount,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Datatype sendtype, void *recvbuf, int recvcount,
<tt> </tt>&nbsp;<tt> </tt>&nbsp; MPI_Datatype recvtype, MPI_Comm comm)
int <a href="../man3/MPI_Ineighbor_allgather.3.php">MPI_Ineighbor_allgather</a>(const void *sendbuf, int  sendcount,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Datatype sendtype, void *recvbuf, int recvcount,
<tt> </tt>&nbsp;<tt> </tt>&nbsp; MPI_Datatype recvtype, MPI_Comm comm, MPI_Request req)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_NEIGHBOR_ALLGATHER(SENDBUF, SENDCOUNT, SENDTYPE, RECVBUF, RECVCOUNT,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;RECVTYPE, COMM, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;&lt;type&gt;<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDBUF (*), RECVBUF (*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDCOUNT, SENDTYPE, RECVCOUNT, RECVTYPE, COMM,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;IERROR
MPI_NEIGHBOR_ALLGATHER(SENDBUF, SENDCOUNT, SENDTYPE, RECVBUF, RECVCOUNT,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;RECVTYPE, COMM, REQUEST, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;&lt;type&gt;<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDBUF (*), RECVBUF (*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDCOUNT, SENDTYPE, RECVCOUNT, RECVTYPE, COMM,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;REQUEST, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>Input Parameters</a></h2>

<dl>

<dt>sendbuf </dt>
<dd>Starting address of send buffer (choice). </dd>

<dt>sendcount
</dt>
<dd>Number of elements in send buffer (integer). </dd>

<dt>sendtype </dt>
<dd>Datatype of send buffer
elements (handle). </dd>

<dt>recvbuf </dt>
<dd>Starting address of recv buffer (choice). </dd>

<dt>recvcount
</dt>
<dd>Number of elements received from any process (integer). </dd>

<dt>recvtype </dt>
<dd>Datatype
of receive buffer elements (handle). </dd>

<dt>comm </dt>
<dd>Communicator (handle).
<p> </dd>
</dl>

<h2><a name='sect5' href='#toc5'>Output
Parameters</a></h2>

<dl>

<dt>recvbuf </dt>
<dd>Address of receive buffer (choice). </dd>

<dt>request </dt>
<dd>Request (handle,
non-blocking only). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Description</a></h2>
MPI_Neighbor_allgather
is similar to <a href="../man3/MPI_Allgather.3.php">MPI_Allgather</a>, except that only the neighboring processes
receive the result, instead of all processes. The neighbors and buffer layout
is determined by the topology of <i>comm</i>. <p>
The type signature associated with
sendcount, sendtype at a process must be equal to the type signature associated
with recvcount, recvtype at any other process. </pre>
<p> <p>

<h2><a name='sect7' href='#toc7'>Neighbor Ordering</a></h2>
For a distributed
graph topology, created with <a href="../man3/MPI_Dist_graph_create.3.php">MPI_Dist_graph_create</a>, the sequence of neighbors
in the send and receive buffers at each process is defined as the sequence
returned by <a href="../man3/MPI_Dist_graph_neighbors.3.php">MPI_Dist_graph_neighbors</a> for destinations and sources, respectively.
For a general graph topology, created with <a href="../man3/MPI_Graph_create.3.php">MPI_Graph_create</a>, the order
of neighbors in the send and receive buffers is defined as the sequence
of neighbors as returned by <a href="../man3/MPI_Graph_neighbors.3.php">MPI_Graph_neighbors</a>. Note that general graph
topologies should generally be replaced by the distributed graph topologies.

<p> For a Cartesian topology, created with <a href="../man3/MPI_Cart_create.3.php">MPI_Cart_create</a>, the sequence of
neighbors in the send and receive buffers at each process is defined by
order of the dimensions, first the neighbor in the negative direction and
then in the positive direction with displacement 1. The numbers of sources
and destinations in the communication routines are 2*ndims with ndims defined
in <a href="../man3/MPI_Cart_create.3.php">MPI_Cart_create</a>. If a neighbor does not exist, i.e., at the border of a
Cartesian topology in the case of a non-periodic virtual grid dimension
(i.e., periods[...]==false), then this neighbor is defined to be MPI_PROC_NULL.

<p> If a neighbor in any of the functions is MPI_PROC_NULL, then the neighborhood
collective communication behaves like a point-to-point communication with
MPI_PROC_NULL in this direction. That is, the buffer is still part of the
sequence of neighbors but it is neither communicated nor updated.
<p>
<h2><a name='sect8' href='#toc8'>Notes</a></h2>
<p>
The
MPI_IN_PLACE option for <i>sendbuf</i> is not meaningful for this operation.
<p>
<p>

<h2><a name='sect9' href='#toc9'>Errors</a></h2>
Almost all MPI routines return an error value; C routines as the
value of the function and Fortran routines in the last argument. <p>
Before
the error value is returned, the current MPI error handler is called. By
default, this error handler aborts the MPI job, except for I/O function
errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the
predefined error handler MPI_ERRORS_RETURN may be used to cause error values
to be returned. Note that MPI does not guarantee that an MPI program can
continue past an error.
<p>
<h2><a name='sect10' href='#toc10'>See Also</a></h2>
<p>
<a href="../man3/MPI_Neighbor_allgatherv.3.php">MPI_Neighbor_allgatherv</a> <a href="../man3/MPI_Cart_create.3.php">MPI_Cart_create</a>
MPI_Garph_create <a href="../man3/MPI_Dist_graph_create.3.php">MPI_Dist_graph_create</a> <br>

<p><a href="../man3/MPI_Gather.3.php">MPI_Gather</a>
<p> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>Input Parameters</a></li>
<li><a name='toc5' href='#sect5'>Output Parameters</a></li>
<li><a name='toc6' href='#sect6'>Description</a></li>
<li><a name='toc7' href='#sect7'>Neighbor Ordering</a></li>
<li><a name='toc8' href='#sect8'>Notes</a></li>
<li><a name='toc9' href='#sect9'>Errors</a></li>
<li><a name='toc10' href='#sect10'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
