<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 17 11:17:10 2005" -->
<!-- isoreceived="20051117161710" -->
<!-- sent="Thu, 17 Nov 2005 09:17:07 -0700" -->
<!-- isosent="20051117161707" -->
<!-- name="Daryl W. Grunau" -->
<!-- email="dwg_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors" -->
<!-- id="20051117161707.GA6886_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.31.1132074005.23752.users_at_open-mpi.org" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>From:</strong> Daryl W. Grunau (<em>dwg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-17 11:17:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0358.php">David Huebner: "[O-MPI users] FC4 Compile Problem"</a>
<li><strong>Previous message:</strong> <a href="0356.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Maybe in reply to:</strong> <a href="0335.php">Daryl W. Grunau: "[O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0360.php">Brian Barrett: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Reply:</strong> <a href="0360.php">Brian Barrett: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Date: Tue, 15 Nov 2005 08:43:58 -0800
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;de7cd3a86b5a3e18ca88a83925c587ca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Daryl --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think that anyone directly replied to you, but I saw some 
</span><br>
<span class="quotelev1">&gt; commits fixing this yesterday (actually, they were already on the 
</span><br>
<span class="quotelev1">&gt; trunk; we forgot to bring them over to the v1.0 branch).  Could you 
</span><br>
<span class="quotelev1">&gt; give this morning's nightly snapshot tarball a whirl?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 14, 2005, at 10:30 AM, Daryl W. Grunau wrote:
</span><br>
<p>[[ snip ]]
<br>
<p>Jeff, thanks for the reply.  I was able to compile rc7 but now am getting a
<br>
core dump from orterun.  Here's the gdb output:
<br>
<p>bluesteel&gt;  gdb /opt/OpenMPI/openmpi-1.0rc7/ib/bin/orterun core.11247 
<br>
GNU gdb Red Hat Linux (6.1post-1.20040607.43.0.1rh)
<br>
Copyright 2004 Free Software Foundation, Inc.
<br>
GDB is free software, covered by the GNU General Public License, and you are
<br>
welcome to change it and/or distribute copies of it under certain conditions.
<br>
Type &quot;show copying&quot; to see the conditions.
<br>
There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for details.
<br>
This GDB was configured as &quot;x86_64-redhat-linux-gnu&quot;...Using host libthread_db library &quot;/lib64/tls/libthread_db.so.1&quot;.
<br>
<p>Core was generated by `orterun -H 200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215 -np'.
<br>
Program terminated with signal 11, Segmentation fault.
<br>
Reading symbols from /usr/lib64/libbproc.so.4...done.
<br>
Loaded symbols for /usr/lib64/libbproc.so.4
<br>
Reading symbols from /lib64/libdl.so.2...done.
<br>
Loaded symbols for /lib64/libdl.so.2
<br>
Reading symbols from /usr/lib64/libaio.so.1...done.
<br>
Loaded symbols for /usr/lib64/libaio.so.1
<br>
Reading symbols from /lib64/tls/libm.so.6...done.
<br>
Loaded symbols for /lib64/tls/libm.so.6
<br>
Reading symbols from /lib64/libutil.so.1...done.
<br>
Loaded symbols for /lib64/libutil.so.1
<br>
Reading symbols from /lib64/libnsl.so.1...done.
<br>
Loaded symbols for /lib64/libnsl.so.1
<br>
Reading symbols from /lib64/tls/libpthread.so.0...done.
<br>
Loaded symbols for /lib64/tls/libpthread.so.0
<br>
Reading symbols from /lib64/tls/libc.so.6...done.
<br>
Loaded symbols for /lib64/tls/libc.so.6
<br>
Reading symbols from /lib64/ld-linux-x86-64.so.2...done.
<br>
Loaded symbols for /lib64/ld-linux-x86-64.so.2
<br>
Reading symbols from /lib64/libnss_files.so.2...done.
<br>
Loaded symbols for /lib64/libnss_files.so.2
<br>
#0  0x0000000000418de8 in orte_totalview_init_after_spawn (jobid=1) at totalview.c:267
<br>
267     totalview.c: No such file or directory.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in totalview.c
<br>
(gdb) where
<br>
#0  0x0000000000418de8 in orte_totalview_init_after_spawn (jobid=1) at totalview.c:267
<br>
#1  0x0000000000417158 in job_state_callback (jobid=1, state=3 '\003') at orterun.c:582
<br>
#2  0x0000000000463c21 in orte_rmgr_urm_callback (data=0x7a9440, cbdata=Variable &quot;cbdata&quot; is not available.
<br>
) at rmgr_urm.c:253
<br>
#3  0x0000000000420d28 in orte_gpr_replica_deliver_notify_msg (msg=0x7a94a0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at gpr_replica_deliver_notify_msg_api.c:141
<br>
#4  0x00000000004269f1 in orte_gpr_replica_process_callbacks () at gpr_replica_messaging_fn.c:78
<br>
#5  0x000000000042d7a5 in orte_gpr_replica_recv (status=Variable &quot;status&quot; is not available.
<br>
) at gpr_replica_recv_proxy_msgs.c:85
<br>
#6  0x0000000000451e59 in mca_oob_recv_callback (status=2326, peer=0x812f90, msg=0x758c80, count=Variable &quot;count&quot; is not available.
<br>
)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at oob_base_recv_nb.c:159
<br>
#7  0x0000000000456308 in mca_oob_tcp_msg_recv_complete (msg=0x5e7210, peer=Variable &quot;peer&quot; is not available.
<br>
) at oob_tcp_msg.c:461
<br>
#8  0x0000000000457e9f in mca_oob_tcp_peer_recv_handler (sd=Variable &quot;sd&quot; is not available.
<br>
) at oob_tcp_peer.c:733
<br>
#9  0x000000000047795d in opal_event_loop (flags=1) at event.c:428
<br>
#10 0x000000000047ceb3 in opal_progress () at opal_progress.c:256
<br>
#11 0x0000000000416b45 in opal_condition_wait (c=0x5d0700, m=0x5d06c0) at condition.h:74
<br>
#12 0x000000000041687e in orterun (argc=6, argv=0x7ffffffff3c8) at orterun.c:384
<br>
#13 0x0000000000416223 in main (argc=6, argv=0x7ffffffff3c8) at main.c:13
<br>
<p><p>I'm presently trying to build/run rc8 to see if it also has problems - I'll
<br>
report what I find.
<br>
<p>Daryl
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0358.php">David Huebner: "[O-MPI users] FC4 Compile Problem"</a>
<li><strong>Previous message:</strong> <a href="0356.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Maybe in reply to:</strong> <a href="0335.php">Daryl W. Grunau: "[O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0360.php">Brian Barrett: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Reply:</strong> <a href="0360.php">Brian Barrett: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
