

			<form action='?'>
				<input type='hidden' name='module' value='multi'>
				<input type='hidden' name='action' value='site_create_submit'>
					<div><span class='item'>사이트 주소</span> http://<input type='text' name='sub_domain'>.<?=etc::base_domain()?></div>
					<div><span class='item'>사이트 제목</span> <input type='text' name='title'></div>
					
					
					<input type='submit' value='생성'>
					<div style='clear:right;'></div>
			</form>