
#!/bin/bash
git clone https://github.com/unode/firefox_decrypt.git /tmp/firefox_decrypt
cd /tmp/firefox_decrypt
python3 firefox_decrypt.py -d "/mnt/data/firefox_profile"
