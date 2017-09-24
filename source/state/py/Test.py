
import unittest

from TCPConnection import TCPConnection
from TCPClosed import TCPClosed
from TCPEstablished import TCPEstablished

class Test(unittest.TestCase):

    def setUp(self):
        self.tcp = TCPConnection()

    def test_init_TCPConnection(self):
        self.assertTrue(isinstance(self.tcp.state, TCPClosed))

    def test_change_state(self):
        self.tcp.change_state(TCPEstablished())
        self.assertTrue(isinstance(self.tcp.state, TCPEstablished))

    def test_open(self):
        self.tcp.open()
        self.assertTrue(isinstance(self.tcp.state, TCPEstablished))        

if __name__ == "__main__": unittest.main()