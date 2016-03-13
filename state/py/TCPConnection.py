
from TCPClosed import TCPClosed

class TCPConnection:

    state = None

    def __init__(self):
        self.state = TCPClosed()

    def change_state(self, state):
        self.state = state

    def open(self):
        self.state.open(self)

    def close(self):
        self.state.close(self)

    def akcnowledge(self):
        self.state.akcnowledge(self)