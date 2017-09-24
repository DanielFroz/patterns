
from TCPState import TCPState
from TCPEstablished import TCPEstablished

class TCPClosed(TCPState):

    def open(self, tcp_connection):
        # some activities
        self.change_state(tcp_connection, TCPEstablished())

    def close(self, tcp_connection):
        pass

    def akcnowledge(self, tcp_connection):
        pass