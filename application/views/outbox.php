<h2><?php echo $title;?> &raquo; Pesan Keluar</h2>
                <div id="main">                	
					<h3>Daftar Pesan Keluar</h3>
						<form action="<?php echo base_url(); ?>pesan/hapusOutbox/" onSubmit="return onDelete();" name="myform" method="post">
							<table cellpadding="0" cellspacing="0" class="display" id="example">
							<thead>
							<tr>
								<th><input type='checkbox' name='pilih' onclick='pilihan()' /></th>
								<th>Waktu</th>
								<th>Nomor Tujuan</b></th>	
								<th>Isi Pesan</th>
							</tr>
							</thead>
							<tbody>
						<?php 
							$no=0;						
							if ($queryOutbox):
						?>
							<?php foreach ($queryOutbox as $outbox):?>
							<?php if($no%2>0){?>
							<tr>
							<?php }else{?>
							<tr class="odd">
							<?php } ?>
								<td><input type="checkbox" name="hapus[]" id="hapus" value="<?php echo $outbox->ID;?>"></td>
								<td><?php echo tgl_indo($outbox->UpdatedInDB);?></td>
								<td><?php echo $outbox->DestinationNumber;?></td>
								<td><?php echo htmlentities($outbox->TextDecoded);?></td>
                            </tr>
							<?php endforeach;?>
						<?php else: ?>
							<tr>
								<td colspan="5" align="center">
									Tidak ada data
								</td>
							</tr>
						<?php endif;?>
							</tbody>
							<tfoot>
							<tr>
								<th></th>
								<th>Waktu</th>
								<th>Nomor Tujuan</b></th>	
								<th>Isi Pesan</th>
							</tr>
							</tfoot>							
                        </table>	
							<p>&nbsp;</p>
							<fieldset>
							<input type="submit" value="Hapus" name="submit"/> 
							<input type="reset" value="Batal" name="reset"/>
							</fieldset>
						</form>
                </div>