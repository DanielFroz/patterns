
from abc import ABCMeta, abstractmethod

class TCPState(metaclass=ABCMeta):

    def change_state(self, tcp_connection, state):
        tcp_connection.change_state(state)

    @abstractmethod
    def open(self, tcp_connection):
        pass

    @abstractmethod
    def close(self, tcp_connection):
        pass

    @abstractmethod
    def akcnowledge(self, tcp_connection):
        pass