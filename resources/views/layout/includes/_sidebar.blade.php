<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="pengaduan" class="active"><i class=""></i> <span>Pengaduan</span></a></li>
						<li><a href="tanggapan" class="active"><i class=""></i> <span>Tanggapan</span></a></li>
					@if(auth()->user()->role == 'admin')
						<li><a href="masyarakat" class="active"><i class=""></i> <span>Data Masyarakat</span></a></li>
						<li><a href="petugas" class="active"><i class=""></i> <span>Data Petugas</span></a></li>
					@endif
					</ul>
				</nav>
			</div>
		</div>